<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hasil Quiz - Studentok</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo-white.svg') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins bg-[#F6F6F8]">

    {{-- Navbar --}}
    <x-navbar></x-navbar>

    {{-- Result Section --}}
    <section class="py-32">
        <div class="px-6 md:px-12 grid grid-cols-1 lg:grid-cols-[1fr_2fr] gap-4 md:gap-6">
            <!-- Score Card -->
            <div
                class="bg-[#fff] rounded-2xl border border-black/20 p-8 text-center mb-8 md:sticky md:top-32 self-start">
                <div class="mb-6">
                    @if ($attempt->score >= 80)
                        <div class="text-6xl mb-4">🎉</div>
                        <h2 class="text-3xl font-bold text-green-600 mb-2">Keren Banget!</h2>
                    @elseif($attempt->score >= 60)
                        <div class="text-6xl mb-4">👍</div>
                        <h2 class="text-3xl font-bold text-blue-600 mb-2">Bagus!</h2>
                    @else
                        <div class="text-6xl mb-4">💪</div>
                        <h2 class="text-3xl font-bold text-orange-600 mb-2">Semangat yaa!</h2>
                    @endif
                </div>

                <div class="bg-[#F6F6F8] rounded-xl p-6 mb-6">
                    <div class="text-6xl font-bold text-[#36656B] mb-2">
                        {{ $attempt->score }}
                    </div>
                    <div class="text-xl text-[#1a1a1a]/70">
                        Skor Kamu
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-4 mb-6">
                    <div class="bg-green-50 rounded-xl p-4">
                        <div class="text-3xl font-bold text-green-600">{{ $attempt->correct_answers }}</div>
                        <div class="text-sm text-[#1a1a1a]/70">Benar</div>
                    </div>
                    <div class="bg-red-50 rounded-xl p-4">
                        <div class="text-3xl font-bold text-red-600">{{ $attempt->wrong_answers }}</div>
                        <div class="text-sm text-[#1a1a1a]/70">Salah</div>
                    </div>
                    <div class="bg-blue-50 rounded-xl p-4">
                        <div class="text-3xl font-bold text-blue-600">{{ $attempt->quiz->total_questions }}</div>
                        <div class="text-sm text-[#1a1a1a]/70">Total</div>
                    </div>
                </div>

                <div class="text-lg text-[#1a1a1a]/60 text-start">
                    Dikerjakan oleh: <span class="font-semibold">{{ $attempt->student_name }}</span>
                </div>
                <div class="text-md text-[#1a1a1a]/50 text-start">
                    <span class="font-semibold">Quiz: </span>{{ $attempt->quiz->title }}
                </div>
                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 mt-8">
                    <a href="{{ route('quiz.show', $attempt->quiz->id) }}"
                        class="w-full text-center bg-white border-2 border-[#1a1a1a]/30 text-[#1a1a1a]/60 py-2 rounded-full hover:bg-[#1a1a1a]/5 transition duration-300 font-semibold">
                        Ulangi Quiz Ini
                    </a>
                    <a href="{{ route('quiz.index') }}"
                        class="w-full text-center bg-[#e26732] border-2 border-[#e26732]/0 py-2 text-white rounded-full hover:bg-[#ff4d00] transition duration-300 font-semibold">
                        Coba Quiz Lain
                    </a>
                </div>
            </div>

            <!-- Review Jawaban -->
            <div class="bg-white rounded-2xl border border-black/20 p-8 mb-8">
                <h3 class="text-2xl font-bold text-[#202020] mb-8">Review Jawaban</h3>

                @foreach ($attempt->quiz->questions as $index => $question)
                    <div class="mb-6 pb-6 border-b border-[#1a1a1a]/10 last:border-0">
                        <div class="flex items-start gap-3 mb-3">
                            <span class="bg-[#36656B] text-white px-3 py-1 rounded-full text-sm font-semibold">
                                {{ $index + 1 }}
                            </span>
                            <p class="text-[#1a1a1a]/90 flex-1 text-lg">{{ $question['question'] }}</p>
                        </div>

                        <div class="ml-12 space-y-2">
                            @php
                                $userAnswer = $attempt->answers[$index] ?? null;
                                $correctAnswer = $question['correct_answer'];
                                $isCorrect = $userAnswer === $correctAnswer;
                            @endphp

                            <div class="flex items-center gap-2">
                                <span class="text-md text-[#1a1a1a]/60">Jawaban kamu:</span>
                                <span
                                    class="px-3 py-1 rounded-full text-sm font-semibold {{ $isCorrect ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                    {{ $userAnswer ?? 'Tidak dijawab' }}
                                    @if ($isCorrect)
                                        ✓
                                    @else
                                        ✗
                                    @endif
                                </span>
                            </div>

                            @if (!$isCorrect)
                                <div class="flex items-center gap-2">
                                    <span class="text-md text-[#1a1a1a]/60">Jawaban benar:</span>
                                    <span
                                        class="px-3 py-1 rounded-full text-sm font-semibold bg-green-100 text-green-700">
                                        {{ $correctAnswer }} ✓
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <x-footer></x-footer>

</body>

</html>
