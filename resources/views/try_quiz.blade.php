<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Try Quiz - Studentok</title>

    {{-- Website Logo --}}
    <link rel="icon" type="image/png" href="{{ asset('img/logo-white.svg') }}" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins bg-[#F6F6F8]">

    {{-- Navbar --}}
    <x-navbar></x-navbar>

    {{-- Try Quiz Section --}}
    <section class="py-32 lg:py-40 px-6">
        <div class="container mx-auto">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-[#202020] text-center md:mb-4 font-inter">
                Quiz yang Tersedia
            </h1>
            <p class="text-center text-[#1a1a1a]/70 mb-16 text-md md:text-lg lg:text-xl font-light">
                Pilih quiz yang ingin kamu kerjakan dan uji pemahamanmu!
            </p>

            @if ($quizzes->isEmpty())
                <div class="text-center py-20">
                    <svg class="w-10 h-10 mx-auto text-[#1a1a1a]/30 mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>
                    <p class="text-lg md:text-xl text-[#1a1a1a]/60">Belum ada quiz tersedia</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($quizzes as $quiz)
                        <div
                            class="bg-[#fff] rounded-2xl transition duration-300 p-6 border border-[#1a1a1a]/20 hover:-translate-y-3 cursor-pointer hover:border-black/40">
                            <div class="flex items-start justify-between mb-4">
                                <h3 class="text-xl md:text-2xl font-bold text-[#202020] line-clamp-2 font-inter">
                                    {{ $quiz->title }}
                                </h3>
                                <span
                                    class="bg-[#FFDCDC]/60 text-[#ff4d00] text-sm font-semibold px-3 py-1 rounded-full whitespace-nowrap ml-2">
                                    {{ $quiz->total_questions }} Soal
                                </span>
                            </div>

                            <p class="text-[#1a1a1a]/70 text-sm mb-4 line-clamp-3">
                                {{ $quiz->description ?? 'Tidak ada deskripsi' }}
                            </p>

                            <div class="flex items-center justify-between text-sm md:text-md text-[#1a1a1a]/80 mb-4">
                                {{ $quiz->created_at->diffForHumans() }}
                            </div>

                            <div class="flex gap-2">
                                {{-- <a href="{{ route('quiz.show', $quiz->id) }}"
                                    class="flex-1 text-center bg-[#36656B] text-white py-2 rounded-full hover:bg-[#75B06F] transition duration-300 font-medium">
                                    Kerjakan Quiz
                                </a> --}}
                                <button data-modal-target="kerjakanQuiz-{{ $quiz->id }}"
                                    data-modal-toggle="kerjakanQuiz-{{ $quiz->id }}"
                                    class="flex-1 text-center bg-[#36656B] text-white py-2 rounded-full hover:bg-[#75B06F] transition duration-300 font-medium">
                                    Kerjakan Quiz
                                </button>
                            </div>

                            <div class="mt-4 text-sm md:text-md text-[#1a1a1a]/60">
                                Sudah dikerjakan {{ $quiz->attempts->count() }} kali
                            </div>


                        </div>
                        <!-- Kerjakan Quiz modal -->
                        <div id="kerjakanQuiz-{{ $quiz->id }}" tabindex="-1"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-lg max-h-full">
                                <div class="relative bg-[#020617] rounded-2xl shadow-sm">
                                    <button type="button"
                                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="kerjakanQuiz-{{ $quiz->id }}">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-4 md:p-5 text-center">
                                        <svg class="mx-auto mb-4 text-white w-12 h-12" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <h3 class="mb-6 text-lg md:text-xl font-light text-white/80">
                                            Yakin ingin memulai Quiz Sekarang?
                                        </h3>
                                        <p
                                            class="text-md md:text-lg p-4 bg-red-200 rounded-2xl leading-normal text-justify font-light text-red-600 mb-8">
                                            Kerjakan quiz secara mandiri tanpa bantuan pihak lain, joki, atau AI.
                                            Dilarang meninggalkan halaman quiz selama pengerjaan. Pelanggaran terhadap
                                            aturan ini dapat menyebabkan hasil quiz dibatalkan.
                                        </p>

                                        <button data-modal-hide="kerjakanQuiz-{{ $quiz->id }}" type="button"
                                            class="px-5 text-center bg-[#36656B]/50 border border-[#36656B] text-white py-2 rounded-xl hover:bg-[#36656B] transition duration-300 font-medium">
                                            Batal
                                        </button>
                                        <a href="{{ route('quiz.show', $quiz->id) }}"
                                            class="py-3 px-5 text-center bg-[#36656B] text-white rounded-xl hover:bg-[#75B06F] transition duration-300 font-medium ms-1">
                                            Mulai
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    {{-- Footer --}}
    <x-footer></x-footer>

</body>

</html>
