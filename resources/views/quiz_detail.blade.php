<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $quiz->title }} - Studentok</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo-white.svg') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins bg-[#FFDCDC]/20">
    {{-- Quiz Detail Section --}}
    <section class="pt-6 pb-12 px-6">
        <div class="container mx-auto max-w-3xl">
            <div class="grid grid-cols-2 gap-4 px-6 mb-4">
                <div class="flex items-center justify-start h-10 md:h-20">
                    <h1 class="text-lg md:text-2xl lg:text-2xl font-semibold text-[#1a1a1a]">
                        Kerjakan Quiz!
                    </h1>
                </div>
                <div class="flex items-center justify-end h-10 md:h-20">
                    <h1 class="text-end text-md md:text-lg lg:text-xl font-light text-black/60">
                        <span id="clock" class="font-bold"></span>
                    </h1>
                </div>
            </div>
            <div class="bg-[#fff]/80 border border-[#1a1a1a]/10 shadow-sm rounded-2xl">
                <!-- Header Quiz -->
                <div class="p-6 md:p-8 border-b border-black/20">
                    <h1 class="text-2xl md:text-3xl font-bold text-[#202020] mb-4 font-inter">
                        {{ $quiz->title }}
                    </h1>
                    <div class="flex flex-wrap gap-4 text-sm md:text-md lg:text-lg text-[#1a1a1a]/70">
                        <span>{{ $quiz->total_questions }} Soal</span>
                        <span>{{ $quiz->created_at->format('d M Y') }}</span>
                    </div>
                    {{-- <p class="text-[#ff0000] bg-[#ff0000]/10 px-4 py-2 rounded-lg">
                        Kerjakan kuis secara mandiri dan jujur. Selama kuis berlangsung, peserta tidak diperkenankan
                        menggunakan bantuan apa pun atau meninggalkan halaman kuis.
                    </p> --}}
                </div>

                <!-- Form Quiz -->
                <form action="{{ route('quiz.submit', $quiz->id) }}" method="POST" id="quizForm">
                    @csrf
                    <!-- Input Nama Siswa -->
                    <div class="p-6">
                        <label class="block text-lg font-semibold text-[#202020] mb-3">
                            Nama Lengkap
                        </label>
                        <input type="text" name="student_name" required
                            class="w-full py-2 px-3.5 border border-[#1a1a1a]/30 rounded-xl focus:ring-[#36656B] focus:border-[#36656B]"
                            placeholder="Masukkan nama lengkap...">
                    </div>
            </div>
            <div class="bg-[#fff]/80 border border-[#1a1a1a]/10 shadow-sm rounded-2xl mt-8">
                <!-- Soal Quiz -->
                @foreach ($quiz->questions as $index => $question)
                    <div class="p-6 mb-6">
                        <h3 class="text-lg md:text-xl lg:text-2xl font-bold text-[#202020] mb-4">
                            Soal {{ $index + 1 }}
                        </h3>
                        <p class="text-[#1a1a1a]/90 mb-4 text-lg md:text-xl">
                            {{ $question['question'] }}
                        </p>

                        <div class="space-y-3">
                            @foreach ($question['options'] as $option)
                                <label
                                    class="flex items-center p-4 border-2 border-[#1a1a1a]/10 rounded-2xl cursor-pointer hover:bg-[#F6F6F8] hover:border-[#36656B] transition duration-300">
                                    <input type="radio" name="answers[{{ $index }}]"
                                        value="{{ substr($option, 0, 1) }}" required
                                        class="w-5 h-5 text-[#36656B] focus:ring-[#36656B]">
                                    <span class="ml-3 text-[#1a1a1a]/80">{{ $option }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endforeach

                <!-- Submit Button -->
                <div class="p-6">
                    <button type="submit"
                        class="w-full bg-[#5b8dd2] text-white py-2 rounded-full hover:bg-[#75B06F] transition duration-300 font-bold text-lg">
                        Selesai
                    </button>
                </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-[#020617]">
        <div class="w-full mx-auto container p-6 flex items-center justify-center">
            <span class="text-md text-[#fff]/60 text-center font-light">Kendala pada saat quiz berlangsung?
                <a href="https://wa.me/62881024728923" target="_blank" class="underline">Hubungi Kami</a>
            </span>
        </div>
    </footer>

    <script>
        // Konfirmasi sebelum submit
        document.getElementById('quizForm').addEventListener('submit', function(e) {
            if (!confirm('Apakah kamu yakin ingin submit jawaban? Pastikan semua soal sudah dijawab!')) {
                e.preventDefault();
            }
        });
    </script>

</body>

</html>
