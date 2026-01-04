<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\QuizAttempt;
use Illuminate\Http\Request;

class QuizAttemptController extends Controller
{
    // Selesai mengerjakan Quiz
    public function submit(Request $request, $quizId)
    {
        $request->validate([
            'student_name' => 'required|string|max:100',
            'answers' => 'required|array'
        ]);

        $quiz = Quiz::findorFail($quizId);
        $answers = $request->input('answers');

        // Hitung Score
        $correctAnswers = 0;
        $wrongAnswers = 0;

        foreach ($quiz->questions as $index => $question) {
            $userAnswer = $answers[$index] ?? null;
            if ($userAnswer === $question['correct_answer']) {
                $correctAnswers++;
            } else {
                $wrongAnswers++;
            }
        }

        // Hitung Score
        $score =  ($correctAnswers / $quiz->total_questions * 100);

        // Simpan
        $attempt = QuizAttempt::create([
            'quiz_id' => $quiz->id,
            'student_name' => $request->input('student_name'),
            'answerts' => $answers,
            'score' => $score,
            'correct_answers' => $correctAnswers,
            'wrong_answers' => $wrongAnswers
        ]);

        // jika berhasil, lempar kehalaman quiz result
        return redirect()->route('quiz.result', $attempt->id)->with('success', 'Selamat, Quiz telah selesai!');
    }

    // Tampilkan hasil quiz
    public function result($attemptId)
    {
        $attempt = QuizAttempt::with('quiz')->findOrFail($attemptId);
        return view('quiz.result', compact('attempt'));
    }
}
