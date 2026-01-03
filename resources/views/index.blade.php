<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Studentok Quiz</title>

    {{-- Website Logo --}}
    <link rel="icon" type="image/png" href="{{ asset('img/logo-white.svg') }}" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins">

    {{-- Navbar --}}
    <x-navbar></x-navbar>

    {{-- Hero Section --}}
    <section style="background-image: url('/img/bg-jumbotron.png')"
        class="bg-center bg-no-repeat min-h-screen bg-cover flex items-center justify-center">
        <div class="px-6 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-6 text-3xl font-extrabold text-[#202020] md:text-5xl lg:text-6xl font-inter">
                Start your lesson and enjoy <br class="hidden md:block"> a smarter learning experience
            </h1>
            <p
                class="my-6 mb-8 font-light leading-normal md:leading-relaxed text-[#000000]/60 text-md md:text-lg lg:text-xl xl:text-2xl sm:px-16">
                Mulai perjalanan belajarmu di sini—belajar dari materi sendiri, berlatih lewat kuis interaktif, dan
                lihat hasilnya secara nyata. Belajar jadi lebih mudah, menyenangkan, dan efektif.
            </p>
            <div class="flex flex-col sm:flex-row sm:justify-center sm:space-y-0">
                <a href=""
                    class="inline-flex justify-center bg-gradient-to-r from-[#84B2F3] to-[#F49867] hover:bg-gradient-to-l items-center shadow-md py-2 md:py-2.5 px-4 md:px-5 sm:ms-4 text-md md:text-lg lg:text-xl font-medium text-center rounded-xl md:rounded-2xl transition duration-500 hover:shadow-none text-[#f5f5f5]">
                    Mulai Belajar!
                </a>
            </div>
        </div>
    </section>

    {{-- Fitur Unggulan Studentok --}}
    <section class="bg-[#F6F3F5] flex items-center justify-center py-20 text-center" id="section-diskon">
        <div class="container px-6 mx-auto">
            <h1 class="text-[#1a1a1a] font-bold text-2xl md:text-3xl lg:text-4xl font-inter">
                Fitur Unggulan untuk <br class="hidden md:block">
                Meningkatkan Pembelajaranmu
            </h1>
            <p class="text-[#1a1a1a]/60 font-light text-md md:text-2xl mt-4 w-full md:w-1/2 mx-auto">
                Studentok hadir
                dengan beragam fitur yang membantu proses belajar jadi lebih mudah, efektif, dan menyenangkan.
            </p>
            {{-- Card Why Choose --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-8 mt-16">
                {{-- Card 1 --}}
                <div
                    class="w-auto bg-[#FFF] border border-black/10 rounded-2xl flex flex-col justify-center items-start px-6 md:px-8 py-6 text-start transition duration-300 hover:-translate-y-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-openai w-8 md:w-10 h-8 md:h-10 text-[#D96E56] mb-4 md:mb-6 mt-2"
                        viewBox="0 0 16 16">
                        <path
                            d="M14.949 6.547a3.94 3.94 0 0 0-.348-3.273 4.11 4.11 0 0 0-4.4-1.934A4.1 4.1 0 0 0 8.423.2 4.15 4.15 0 0 0 6.305.086a4.1 4.1 0 0 0-1.891.948 4.04 4.04 0 0 0-1.158 1.753 4.1 4.1 0 0 0-1.563.679A4 4 0 0 0 .554 4.72a3.99 3.99 0 0 0 .502 4.731 3.94 3.94 0 0 0 .346 3.274 4.11 4.11 0 0 0 4.402 1.933c.382.425.852.764 1.377.995.526.231 1.095.35 1.67.346 1.78.002 3.358-1.132 3.901-2.804a4.1 4.1 0 0 0 1.563-.68 4 4 0 0 0 1.14-1.253 3.99 3.99 0 0 0-.506-4.716m-6.097 8.406a3.05 3.05 0 0 1-1.945-.694l.096-.054 3.23-1.838a.53.53 0 0 0 .265-.455v-4.49l1.366.778q.02.011.025.035v3.722c-.003 1.653-1.361 2.992-3.037 2.996m-6.53-2.75a2.95 2.95 0 0 1-.36-2.01l.095.057L5.29 12.09a.53.53 0 0 0 .527 0l3.949-2.246v1.555a.05.05 0 0 1-.022.041L6.473 13.3c-1.454.826-3.311.335-4.15-1.098m-.85-6.94A3.02 3.02 0 0 1 3.07 3.949v3.785a.51.51 0 0 0 .262.451l3.93 2.237-1.366.779a.05.05 0 0 1-.048 0L2.585 9.342a2.98 2.98 0 0 1-1.113-4.094zm11.216 2.571L8.747 5.576l1.362-.776a.05.05 0 0 1 .048 0l3.265 1.86a3 3 0 0 1 1.173 1.207 2.96 2.96 0 0 1-.27 3.2 3.05 3.05 0 0 1-1.36.997V8.279a.52.52 0 0 0-.276-.445m1.36-2.015-.097-.057-3.226-1.855a.53.53 0 0 0-.53 0L6.249 6.153V4.598a.04.04 0 0 1 .019-.04L9.533 2.7a3.07 3.07 0 0 1 3.257.139c.474.325.843.778 1.066 1.303.223.526.289 1.103.191 1.664zM5.503 8.575 4.139 7.8a.05.05 0 0 1-.026-.037V4.049c0-.57.166-1.127.476-1.607s.752-.864 1.275-1.105a3.08 3.08 0 0 1 3.234.41l-.096.054-3.23 1.838a.53.53 0 0 0-.265.455zm.742-1.577 1.758-1 1.762 1v2l-1.755 1-1.762-1z" />
                    </svg>
                    <h1 class="my-2 md:my-1.5 font-bold text-lg md:text-xl lg:text-2xl text-[#D96E56]">
                        Pembuatan Soal Bertenaga AI
                    </h1>
                    <div class="text-[#1a1a1a]/80 font-light text-md md:text-lg xl:text-xl">
                        AI menghasilkan pertanyaan
                        yang <br> relevan sesuai materi belajarmu
                    </div>
                </div>

                {{-- Card 2 --}}
                <div
                    class="w-auto bg-[#FFF] border border-black/10 rounded-2xl flex flex-col justify-center items-start px-6 md:px-8 py-6 text-start transition duration-300 hover:-translate-y-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-file-earmark-break w-8 md:w-10 h-8 md:h-10 text-[#D96E56] mb-4 md:mb-6 mt-2"
                        viewBox="0 0 16 16">
                        <path
                            d="M14 4.5V9h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v7H2V2a2 2 0 0 1 2-2h5.5zM13 12h1v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2h1v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1zM.5 10a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1z" />
                    </svg>
                    <h1 class="my-2 md:my-1.5 font-bold text-lg md:text-xl lg:text-2xl text-[#D96E56]">
                        Format Pembuatan Kuis
                    </h1>
                    <div class="text-[#1a1a1a]/80 font-light text-md md:text-lg xl:text-xl">
                        Unggah materi dalam bentuk
                        teks, atau file, bahkan gambar untuk pembuatan kuis
                    </div>
                </div>

                {{-- Card 3 --}}
                <div
                    class="w-auto bg-[#FFF] border border-black/10 rounded-2xl flex flex-col justify-center items-start px-6 md:px-8 py-6 text-start transition duration-300 hover:-translate-y-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-globe w-8 md:w-10 h-8 md:h-10 text-[#D96E56] mb-4 md:mb-6 mt-2"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                    </svg>
                    <h1 class="my-2 md:my-1.5 font-bold text-lg md:text-xl lg:text-2xl text-[#D96E56]">
                        Aman dan Terpercaya
                    </h1>
                    <div class="text-[#1a1a1a]/80 font-light text-md md:text-lg xl:text-xl">
                        Platform kami dirancang
                        dengan standar keamanan tinggi untuk melindungi data Anda
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Manfaat --}}
    <section class="bg-[#FFFAFA] flex items-center justify-center py-24 text-center">
        <div class="container px-6 mx-auto">
            <h1 class="text-[#1a1a1a] font-bold text-2xl md:text-3xl lg:text-4xl font-inter">
                Solusi Belajar <br class="hidden md:block">
                untuk Siswa dan Guru
            </h1>
            <p class="text-[#1a1a1a]/60 font-light text-md md:text-2xl mt-4 w-full md:w-1/2 mx-auto">
                Studentok menyediakan alat yang berharga bagi siswa dan pengajar untuk meningkatkan pengalaman belajar.
            </p>

            {{-- Card Manfaat --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 mt-12 md:mt-16">

                {{-- Card 1 --}}
                <div
                    class="w-auto bg-[#FFF] border border-black/10 rounded-2xl flex flex-col justify-center items-start px-6 md:px-8 py-6 text-start transition duration-300 hover:-translate-y-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-mortarboard w-8 md:w-10 h-8 md:h-10 text-[#00709A] mb-4 md:mb-6 mt-2"
                        viewBox="0 0 16 16">
                        <path
                            d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                        <path
                            d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                    </svg>
                    <h1 class="my-2 md:my-1.5 font-bold text-lg md:text-xl lg:text-2xl text-[#00709A]">
                        Untuk Siswa
                    </h1>
                    <div class="text-[#1a1a1a]/80 font-light text-md md:text-lg xl:text-xl">
                        Tingkatkan pemahaman materi, temukan bagian yang perlu diperbaiki, dan hadapi ujian dengan lebih
                        percaya diri.
                    </div>
                </div>

                {{-- Card 2 --}}
                <div
                    class="w-auto bg-[#FFF] border border-black/10 rounded-2xl flex flex-col justify-center items-start px-6 md:px-8 py-6 text-start transition duration-300 hover:-translate-y-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-people w-8 md:w-10 h-8 md:h-10 text-[#00709A] mb-4 md:mb-6 mt-2"
                        viewBox="0 0 16 16">
                        <path
                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                    </svg>
                    <h1 class="my-2 md:my-1.5 font-bold text-lg md:text-xl lg:text-2xl text-[#00709A]">
                        Untuk Guru
                    </h1>
                    <div class="text-[#1a1a1a]/80 font-light text-md md:text-lg xl:text-xl">
                        Buat kuis menarik dengan cepat, pantau perkembangan siswa, dan berikan pengalaman belajar yang
                        lebih personal.
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bagaimana cara kerjanya - Section --}}
    <section class="py-20" id="cara_kerja">
        <div class="container mx-auto px-8">
            <h1 class="text-[#1a1a1a] font-bold text-2xl md:text-3xl lg:text-4xl text-center font-inter">
                Bagaimana Cara Kerjanya?
            </h1>
            <div class="mt-10 md:mt-16 grid grid-cols-1 lg:grid-cols-2 items-center justify-center gap-6">
                <img src="{{ asset('img/img-cara-kerja.png') }}" class="hidden lg:block w-full lg:w-[600px]"
                    alt="Image Help">
                <div class="space-y-16">
                    <div class="flex flex-col md:flex-row items-start gap-4">
                        <div
                            class="w-12 md:w-14 aspect-square shrink-0 bg-[#FFDCDC]/40 rounded-xl flex items-center justify-center text-[#FF8C5B]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 md:w-8 h-6 md:h-8">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M14 22h-4c-3.771 0-5.657 0-6.828-1.172S2 17.771 2 14v-4c0-3.771 0-5.657 1.172-6.828S6.239 2 10.03 2c.606 0 1.091 0 1.5.017q-.02.12-.02.244l-.01 2.834c0 1.097 0 2.067.105 2.848c.114.847.375 1.694 1.067 2.386c.69.69 1.538.952 2.385 1.066c.781.105 1.751.105 2.848.105h4.052c.043.534.043 1.19.043 2.063V14c0 3.771 0 5.657-1.172 6.828S17.771 22 14 22"
                                    clip-rule="evenodd" opacity="0.5" />
                                <path fill="currentColor"
                                    d="m11.51 2.26l-.01 2.835c0 1.097 0 2.066.105 2.848c.114.847.375 1.694 1.067 2.385c.69.691 1.538.953 2.385 1.067c.781.105 1.751.105 2.848.105h4.052q.02.232.028.5H22c0-.268 0-.402-.01-.56a5.3 5.3 0 0 0-.958-2.641c-.094-.128-.158-.204-.285-.357C19.954 7.494 18.91 6.312 18 5.5c-.81-.724-1.921-1.515-2.89-2.161c-.832-.556-1.248-.834-1.819-1.04a6 6 0 0 0-.506-.154c-.384-.095-.758-.128-1.285-.14z" />
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-semibold text-lg md:text-xl lg:text-2xl text-[#1a1a1a]">
                                Unggah Materi
                            </h3>
                            <p class="text-[#1a1a1a]/80 text-md md:text-lg lg:text-xl mt-2 font-light">
                                Unggah catatan, buku teks, atau materi pembelajaran lainnya dalam berbagai format
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row items-start gap-4">
                        <div
                            class="w-12 md:w-14 aspect-square shrink-0 bg-[#FFDCDC]/40 rounded-xl flex items-center justify-center text-[#FF8C5B]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 md:w-8 h-6 md:h-8" viewBox="0 0 24 24">
                                <g fill="none">
                                    <path
                                        d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                    <path fill="currentColor"
                                        d="M9.107 5.448c.598-1.75 3.016-1.803 3.725-.159l.06.16l.807 2.36a4 4 0 0 0 2.276 2.411l.217.081l2.36.806c1.75.598 1.803 3.016.16 3.725l-.16.06l-2.36.807a4 4 0 0 0-2.412 2.276l-.081.216l-.806 2.361c-.598 1.75-3.016 1.803-3.724.16l-.062-.16l-.806-2.36a4 4 0 0 0-2.276-2.412l-.216-.081l-2.36-.806c-1.751-.598-1.804-3.016-.16-3.724l.16-.062l2.36-.806A4 4 0 0 0 8.22 8.025l.081-.216zM19 2a1 1 0 0 1 .898.56l.048.117l.35 1.026l1.027.35a1 1 0 0 1 .118 1.845l-.118.048l-1.026.35l-.35 1.027a1 1 0 0 1-1.845.117l-.048-.117l-.35-1.026l-1.027-.35a1 1 0 0 1-.118-1.845l.118-.048l1.026-.35l.35-1.027A1 1 0 0 1 19 2" />
                                </g>
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-semibold text-lg md:text-xl lg:text-2xl text-[#1a1a1a]">
                                AI membuat kuis
                            </h3>
                            <p class="text-[#1a1a1a]/80 text-md md:text-lg lg:text-xl mt-2 font-light">
                                AI kami menganalisis kontenmu dan
                                membuat kuis yang relevan dengan materi
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row items-start gap-4">
                        <div
                            class="w-12 md:w-14 aspect-square shrink-0 bg-[#FFDCDC]/40 rounded-xl flex items-center justify-center text-[#FF8C5B]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 md:w-8 h-6 md:h-8"
                                viewBox="0 0 28 28">
                                <path fill="currentColor"
                                    d="M21.25 3A3.75 3.75 0 0 1 25 6.75v14.5A3.75 3.75 0 0 1 21.25 25H6.75A3.75 3.75 0 0 1 3 21.25V6.75A3.75 3.75 0 0 1 6.75 3zM6.75 20.001a.75.75 0 0 0 0 1.5h14.5a.75.75 0 0 0 0-1.5zm0-4.003a.75.75 0 0 0 0 1.5h14.5a.75.75 0 1 0 0-1.5zM11.502 6a.75.75 0 0 0-.692.457L8.06 12.96a.75.75 0 0 0 1.38.585l.442-1.043h3.236l.442 1.043a.75.75 0 0 0 1.38-.584l-2.748-6.503a.75.75 0 0 0-.69-.458m6.248 0a.75.75 0 0 0-.75.75V8h-1.248a.75.75 0 0 0 0 1.5H17v1.248a.75.75 0 0 0 1.5 0V9.5h1.25a.75.75 0 0 0 0-1.5H18.5V6.75a.75.75 0 0 0-.75-.75m-5.266 5.002h-1.967l.984-2.327z" />
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-semibold text-lg md:text-xl lg:text-2xl text-[#1a1a1a]">
                                Kerjakan Kuis
                            </h3>
                            <p class="text-[#1a1a1a]/80 text-md md:text-lg lg:text-xl mt-2 font-light">
                                Uji pengetahuanmu dan pantau
                                kemajuanmu dengan kuis interaktif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Ajakan --}}
    <section class="bg-[#FFFAFA] flex items-center justify-center py-24 text-center">
        <x-cta-ajakan></x-cta-ajakan>
    </section>

    {{-- Footer --}}
    <x-footer></x-footer>
</body>

</html>
