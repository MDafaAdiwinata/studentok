<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Smalot\PdfParser\Parser as PdfParser;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Element\Text;
use PhpOffice\PhpWord\Element\TextRun;

class QuizController extends Controller
{
    public function create()
    {
        return view('generate');
    }

    public function index()
    {
        return view('try_quiz', [
            'quizzes' => Quiz::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        // Set max execution time
        set_time_limit(180);

        $request->validate([
            'message'     => 'nullable|string',
            'FileMateri'  => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);


        // Validasi ukuran file manual (tambahan untuk alert yang lebih jelas)
        if ($request->hasFile('FileMateri')) {
            $file = $request->file('FileMateri');
            $fileSizeInMB = $file->getSize() / 1024 / 1024; // Convert bytes ke MB

            if ($fileSizeInMB > 2) {
                return back()->with('error', 'Ukuran file terlalu besar! Maksimal 2MB. File Anda: ' . round($fileSizeInMB, 2) . 'MB');
            }
        }

        $materiText = $this->getMateriText($request);

        if ($materiText === '') {
            return back()->with('error', 'Mohon isi materi pembelajaran atau upload file!');
        }

        $materiText = substr($materiText, 0, 4000);
        Log::info('Final material length: ' . strlen($materiText));

        // Coba generate quiz sampai dapat 15 soal (max 3 percobaan)
        $quizData = null;
        $attempts = 0;
        $maxAttempts = 3;

        while ($attempts < $maxAttempts && (!$quizData || count($quizData['questions'] ?? []) !== 15)) {
            $attempts++;
            Log::info("Generate attempt #{$attempts}");

            $quizData = $this->generateQuizWithAI($materiText);

            if ($quizData && isset($quizData['questions'])) {
                $questionCount = count($quizData['questions']);
                Log::info("Generated {$questionCount} questions");

                // Jika dapat 15 soal, stop
                if ($questionCount === 15) {
                    break;
                }
            }
        }

        // Validasi final
        if (!$quizData || count($quizData['questions'] ?? []) !== 15) {
            Log::error('Failed to generate exactly 15 questions after ' . $attempts . ' attempts');
            return back()->with('error', 'Gagal generate soal. Silakan coba lagi!');
        }

        $quiz = Quiz::create([
            'title'           => $quizData['title'] ?? 'Quiz Tanpa Judul',
            'description'     => substr($materiText, 0, 200),
            'questions'       => $quizData['questions'],
            'total_questions' => count($quizData['questions']),
        ]);

        return back()->with([
            'success' => 'Quiz dengan 15 soal berhasil dibuat!',
            'quiz' => $quiz
        ]);
    }

    private function getMateriText(Request $request): string
    {
        $text = trim($request->input('message', ''));

        if (!$request->hasFile('FileMateri')) {
            return $text;
        }

        $file = $request->file('FileMateri');
        $ext  = $file->getClientOriginalExtension();

        Log::info('Processing file: ' . $file->getClientOriginalName());

        $fileText = match ($ext) {
            'pdf'  => $this->extractPdfText($file),
            'doc', 'docx' => $this->extractDocxText($file),
            default => '',
        };

        return trim($text . "\n\n" . $fileText);
    }

    private function generateQuizWithAI(string $materiText): ?array
    {
        try {
            $response = Http::timeout(120)->withHeaders([
                'Authorization' => 'Bearer ' . env('OPENROUTER_API_KEY'),
                'Content-Type'  => 'application/json',
            ])->post('https://openrouter.ai/api/v1/chat/completions', [
                'model' => 'deepseek/deepseek-r1-0528:free',
                'temperature' => 0.3,
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'Kamu adalah AI pembuat soal. Output HARUS JSON valid.'
                    ],
                    [
                        'role' => 'user',
                        'content' => $this->buildPrompt($materiText)
                    ]
                ]
            ]);

            if (!$response->successful()) {
                return null;
            }

            $content = $response->json()['choices'][0]['message']['content'] ?? '';

            $content = preg_replace('/```json|```/', '', $content);
            $content = trim($content);

            if (!preg_match('/\{[\s\S]*\}/', $content, $match)) {
                return null;
            }

            $decoded = json_decode($match[0], true);

            return isset($decoded['questions']) ? $decoded : null;
        } catch (\Exception $e) {
            Log::error('AI Error: ' . $e->getMessage());
            return null;
        }
    }

    private function buildPrompt(string $materi): string
    {
        return <<<PROMPT
Buatkan TEPAT 15 soal pilihan ganda berdasarkan materi berikut.

ATURAN WAJIB:
- Jumlah soal HARUS TEPAT 15 soal, tidak boleh kurang atau lebih
- Setiap soal harus berbeda dan tidak mengulang
- Semua soal harus relevan dengan materi yang diberikan
- Jika materi terbatas, buat variasi soal dari berbagai sudut pandang (definisi, contoh, penerapan, analisis)
- Buat soal dengan tingkat kesulitan bervariasi (mudah, sedang, sulit)

FORMAT JSON (WAJIB):
{
  "title": "Judul Quiz (singkat dan menarik)",
  "questions": [
    {
      "question": "Pertanyaan yang jelas dan spesifik?",
      "options": ["A. Jawaban pertama", "B. Jawaban kedua", "C. Jawaban ketiga", "D. Jawaban keempat"],
      "correct_answer": "A"
    }
  ]
}

PENTING:
- Array "questions" HARUS berisi TEPAT 15 objek soal
- Setiap opsi jawaban harus diawali dengan huruf (A., B., C., D.)
- "correct_answer" hanya berisi huruf saja (A, B, C, atau D)
- Tidak boleh ada teks selain JSON

MATERI:
$materi

Response HANYA JSON, tidak ada teks lain. HARUS 15 soal!
PROMPT;
    }

    private function extractPdfText($file): string
    {
        try {
            return (new PdfParser())
                ->parseFile($file->getRealPath())
                ->getText();
        } catch (\Exception $e) {
            Log::error('PDF Error: ' . $e->getMessage());
            return '';
        }
    }

    private function extractDocxText($file): string
    {
        try {
            $phpWord = IOFactory::load($file->getRealPath());
            $text = '';

            foreach ($phpWord->getSections() as $section) {
                foreach ($section->getElements() as $element) {

                    if ($element instanceof Text) {
                        $text .= $element->getText() . ' ';
                    }

                    if ($element instanceof TextRun) {
                        foreach ($element->getElements() as $child) {
                            if ($child instanceof Text) {
                                $text .= $child->getText() . ' ';
                            }
                        }
                    }
                }
            }

            return trim($text);
        } catch (\Exception $e) {
            Log::error('DOCX Error: ' . $e->getMessage());
            return '';
        }
    }

    public function show($id)
    {
        return view('quiz_detail', [
            'quiz' => Quiz::findOrFail($id)
        ]);
    }
}
