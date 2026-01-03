<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feedback - Studentok Quiz</title>

    {{-- Website Logo --}}
    <link rel="icon" type="image/png" href="{{ asset('img/logo-white.svg') }}" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins">

    {{-- Navbar --}}
    <x-navbar></x-navbar>

    {{-- Quiz Generator Section --}}
    <section class="min-h-screen bg-center bg-no-repeat bg-[#F6F6F8] bg-cover flex flex-col">
        <div class="px-4 mx-auto container text-center py-32 lg:py-38">
            <h1 class="mb-2 md:mb-4 text-3xl font-bold text-[#202020] md:text-4xl lg:text-5xl font-inter">
                Hubungi Kami
            </h1>
            <p class="font-light text-[#000000]/60 text-md md:text-lg lg:text-xl xl:text-2xl sm:px-16 lg:px-48">
                Pendapatmu sangat berarti bagi kami. <br class="hidden md:block"> Bantu Studentok berkembang lebih baik yukk
            </p>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-16">
                <!-- Informasi Kontak -->
                <div class="bg-[#fff] rounded-2xl p-6 md:p-8 border border-black/10">
                    <h2 class="text-lg md:text-xl lg:text-2xl text-center md:text-start font-semibold text-[#1a1a1a] font-inter">
                        Informasi kontak
                    </h2>

                    <div class="mt-6 md:mt-10 text-start space-y-8 md:space-y-16 md:ms-6">

                        <!-- Step 1 -->
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-4">
                            <div
                                class="w-12 md:w-14 h-12 md:h-14 bg-[#FFDCDC]/40 rounded-xl flex items-center justify-center text-[#FF8C5B]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-envelope-fill w-6 md:w-8 h-6 md:h-8"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-center md:text-start font-semibold text-lg md:text-xl text-[#1a1a1a]">
                                    Email
                                </h3>
                                <p class="text-center md:text-start text-[#1a1a1a]/80 text-md md:text-lg lg:text-xl mt-1">
                                    studentok@gmail.com
                                </p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-4">
                            <div
                                class="w-12 md:w-14 h-12 md:h-14 bg-[#FFDCDC]/20 rounded-xl flex items-center justify-center text-[#FF8C5B]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-telephone-fill w-6 md:w-8 h-6 md:h-8"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-center md:text-start font-semibold text-lg md:text-xl text-[#1a1a1a]">
                                    Telepon
                                </h3>
                                <a href="https://wa.me/62881024728923" target="_blank"
                                    class="text-center md:text-start text-[#1a1a1a]/80 text-md md:text-lg lg:text-xl mt-1 hover:underline cursor-pointer">
                                    +62881 0247 28923
                                </a>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex flex-col md:flex-row items-center md:items-start gap-4">
                            <div
                                class="w-12 md:w-14 h-12 md:h-14 bg-[#FFDCDC]/20 rounded-xl flex items-center justify-center text-[#FF8C5B]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-geo-alt-fill w-6 md:w-8 h-6 md:h-8"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-center md:text-start font-semibold text-lg md:text-xl text-[#1a1a1a]">
                                    Lokasi
                                </h3>
                                <p class="text-center md:text-start text-[#1a1a1a]/80 text-md md:text-lg lg:text-xl mt-1">
                                    Lorem Ipsum Dolor Sit,
                                    amet, <br> construscet ipsum
                                    sapasi lorem dolor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Kontak -->
                <div class="bg-white rounded-xl shadow-sm p-6 md:p-8 border border-gray-200">

                    <h2 class="text-center text-lg md:text-xl lg:text-2xl md:text-start font-semibold text-[#1a1a1a] font-inter">
                        Kirimkan Pesan kepada Kami
                    </h2>
                    {{-- Alert --}}
                    <div id="alert-3" class="alert-success-form hidden items-center p-4 mt-4 text-green-800 rounded-2xl bg-green-600/10"
                        role="alert">
                        <div class="ms-2 text-md font-medium">
                            Yey Pesan Berhasil dikirim! 🥳
                        </div>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-700 rounded-xl transition duration-300 focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-800 hover:text-white inline-flex items-center justify-center h-8 w-8"
                            data-dismiss-target="#alert-3" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    <form name="submit-to-google-sheet" class="mt-6 space-y-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <input type="text" placeholder="Nama Lengkap" name="nama_lengkap"
                                class="w-full px-3 py-2.5 border border-black/20 text-[#1a1a1a]/80 rounded-xl md:rounded-2xl focus:outline-none"
                                required>
                            <input type="email" placeholder="Email" name="email"
                                class="w-full px-3 py-2.5 border border-black/20 text-[#1a1a1a]/80 rounded-xl md:rounded-2xl focus:outline-none"
                                required>
                        </div>

                        <input type="text" placeholder="Subjek" name="subjek"
                            class="w-full px-3 py-2.5 border border-black/20 text-[#1a1a1a]/80 rounded-xl md:rounded-2xl focus:outline-none"
                            required>

                        <textarea rows="6" placeholder="Pesan Anda" name="pesan"
                            class="w-full px-4 py-3 border border-black/20 text-[#1a1a1a]/80 rounded-xl md:rounded-2xl resize-none focus:outline-none"
                            required></textarea>

                        <button type="submit"
                            class="btn-kirim w-full bg-[#FF8C5B] hover:bg-[#5b8dd2] text-md md:text-lg text-white font-semibold py-2 rounded-full transition duration-300">
                            Kirim
                        </button>
                        <button type="button" disabled
                            class="btn-loading hidden w-full bg-[#f0f0f0] hover:bg-[#ccc]/20 text-md md:text-lg text-[#1a1a1a]/60 border border-[#1a1a1a]/10 font-semibold py-2 rounded-full transition duration-300">
                            Sedang Proses Kirim Feedback...
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <x-footer></x-footer>

    {{-- Form to Sheets Script --}}
    <script>
        const scriptURL =
            'https://script.google.com/macros/s/AKfycbzq2Fag44SUoaJe5N9kGtVI4qLfw_XEJcIWfG_K0DQ0n0zz9hVb5Pc0GBeJLsSrkxYg/exec'
        const form = document.forms['submit-to-google-sheet']
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const alertSuccessForm = document.querySelector('.alert-success-form');

        form.addEventListener('submit', e => {
            e.preventDefault()

            // Ketika submit di klik
            btnLoading.classList.toggle('hidden');
            btnKirim.classList.toggle('hidden');
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    btnLoading.classList.toggle('hidden');
                    btnKirim.classList.toggle('hidden');
                    alertSuccessForm.classList.toggle('hidden');
                    alertSuccessForm.classList.toggle('flex');
                    console.log('Berhasil!', response)
                })
                .catch(error => console.error('Terjadi Kesalahan!', error.message))
        })
    </script>
</body>

</html>
