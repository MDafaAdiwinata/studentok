<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Generate - Studentok Quiz</title>

    {{-- Website Logo --}}
    <link rel="icon" type="image/png" href="{{ asset('img/logo-white.svg') }}" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-poppins">

    {{-- Navbar --}}
    <x-navbar></x-navbar>

    {{-- Quiz Generator Section --}}
    <section class="bg-center bg-no-repeat bg-[#F6F6F8] bg-cover flex flex-col">
        <div class="px-4 mx-auto container text-center py-32 lg:py-40">
            <h1 class="mb-2 md:mb-6 text-3xl font-bold text-[#202020] md:text-4xl lg:text-5xl font-inter" data-aos="fade-down" data-aos-delay="200">
                Quiz Generate
            </h1>

            @if (session('success'))
                <div id="alert-1"
                    class="w-fit gap-6 md:gap-24 ms-auto flex items-center p-4 mt-4 text-green-800 rounded-2xl bg-green-600/10"
                    role="alert">
                    <div class="ms-2 text-sm md:text-md font-medium text-start">
                        <strong>Berhasil!</strong>
                        {{ session('success') }}
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 text-green-700 rounded-xl transition duration-300 focus:ring-2 focus:ring-green-400 p-1.5 hover:text-green-800 inline-flex items-center justify-center h-8 w-8"
                        data-dismiss-target="#alert-1" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif

            @if (session('error'))
                <div id="alert-2"
                    class="w-fit gap-6 md:gap-24 ms-auto flex items-center p-4 mt-4 text-red-800 rounded-2xl bg-red-600/10"
                    role="alert">
                    <div class="ms-2 text-sm md:text-md font-medium text-start">
                        <strong>Gagal!</strong>
                        {{ session('error') }}
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 text-red-700 rounded-xl transition duration-300 focus:ring-2 focus:ring-red-400 p-1.5 hover:text-red-800 inline-flex items-center justify-center h-8 w-8"
                        data-dismiss-target="#alert-2" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif
            <form action="{{ route('quiz.store') }}" method="POST" enctype="multipart/form-data"
                class="flex flex-col gap-2 md:gap-4">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[2fr_1fr] gap-6 mt-8">
                    <!-- Textarea -->
                    <div class="" data-aos="fade-up" data-aos-delay="800">
                        <label for="message"
                            class="block mb-3 text-md lg:text-lg xl:text-xl font-medium text-[#1a1a1a] text-start">
                            Jelaskan materi pembelajaran di sini
                        </label>
                        <textarea id="message" name="message" style="resize: none;"
                            class="block p-3 w-full h-60 text-md lg:text-lg text-[#1a1a1a]/80 font-light bg-[#F0F2F5]/20 rounded-xl border border-[#1a1a1a]/40 focus:ring-[#1a1a1a] focus:border-[#1a1a1a]/40"
                            placeholder="yukk jelasin materi pembelajaran yang mau kamu jadikan quiz! (maks: 6000 karakter)"></textarea>
                    </div>
                    {{-- File Upload --}}
                    <div class="flex flex-col items-start justify-center w-full" data-aos="fade-up" data-aos-delay="1200">
                        <p class="block mb-3 text-md lg:text-lg xl:text-xl font-medium text-[#1a1a1a] text-start">
                            Atau, upload file materi
                        </p>
                        <label for="FileMateri"
                            class="flex flex-col items-center justify-center w-full h-60 border-2 border-[#1a1a1a]/30 border-dashed rounded-xl cursor-pointer bg-transparent hover:bg-[#f6f6f8] transition duration-300">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 md:w-10 md:h-10 mb-4 text-[#1a1a1a]/60" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-1 text-sm md:text-md lg:text-lg text-[#1a1a1a]/60">
                                    <span class="font-semibold">Klik untuk mengunggah</span>
                                </p>
                                <p class="text-sm md:text-md lg:text-lg text-[#1a1a1a]/60">
                                    PDF, or WORD File (MAX. 2MB)
                                </p>
                            </div>
                            <input id="FileMateri" name="FileMateri" type="file" class="hidden"
                                accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                onchange="previewFileName('FileMateri', 'previewFileMateri')" />
                        </label>
                        <p id="previewFileMateri" class="mt-2 text-sm md:text-md text-[#1a1a1a]/80 italic"></p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center justify-end gap-2">
                    <span data-modal-target="modalS&K" data-modal-toggle="modalS&K" data-aos="zoom-in" data-aos-delay="800"
                        class="cursor-pointer block text-black/60 hover:text-black underline font-semibold rounded-lg text-md px-5 py-2.5 text-center">
                        Baca S&K
                    </span>

                    <!-- Tombol Submit Normal -->
                    <button type="submit" id="submitBtn" data-aos="zoom-out" data-aos-delay="2000"
                        class="w-full md:w-fit md:ms-auto text-[#f0f0f0] bg-[#36656B] border border-[#1a1a1a]/20 hover:bg-[#75B06F] hover:text-heading shadow-md hover:shadow-none font-semibold leading-5 rounded-full text-sm md:text-md lg:text-lg px-6 py-2 transition duration-300">
                        Generate Quiz
                    </button>

                    <!-- Tombol Loading (Hidden by default) -->
                    <button type="button" disabled id="loadingBtn"
                        class="hidden w-fit md:ms-auto bg-[#f0f0f0] hover:bg-[#ccc]/20 text-md md:text-lg text-[#1a1a1a]/60 border border-[#1a1a1a]/10 font-semibold py-2 px-6 rounded-full transition duration-300">
                        Quiz sedang di Buat...
                    </button>
                </div>
            </form>
        </div>

        <!-- Main modal -->
        <div id="modalS&K" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-[#020617] rounded-2xl shadow-sm">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-white/40">
                        <h3 class="text-xl font-semibold text-white font-inter">
                            S&K Generate Quiz
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="modalS&K">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <p class="text-md md:text-lg leading-relaxed text-white/80 text-justify mb-4 font-light">
                            Prompt atau file yang digunakan untuk generate quiz wajib berisi maksimal 6.000 karakter.
                            Input harus relevan, jelas, dan tidak mengandung teks berlebihan atau tidak berkaitan.
                            Sistem berhak menolak atau menghentikan proses generate apabila ketentuan ini tidak dipenuhi
                            guna menjaga kinerja dan stabilitas AI.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <x-footer></x-footer>

    <script>
        function previewFileName(inputId, previewId) {
            const input = document.getElementById(inputId);
            const preview = document.getElementById(previewId);
            if (input.files.length > 0) {
                preview.textContent = `File dipilih: ${input.files[0].name}`;
            } else {
                preview.textContent = "";
            }
        }

        // Function untuk menampilkan alert error
        function showErrorAlert(message) {
            const alertHtml = `
        <div id="alert-error-js"
            class="w-fit gap-6 md:gap-24 ms-auto flex items-center p-4 mt-4 text-yellow-800 rounded-2xl bg-yellow-600/10"
            role="alert">
            <div class="ms-2 text-sm md:text-md font-medium text-start">
                <strong>Gagal!</strong> ${message}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 text-yellow-700 rounded-xl transition duration-300 focus:ring-2 focus:ring-yellow-400 p-1.5 hover:text-yellow-800 inline-flex items-center justify-center h-8 w-8"
                onclick="this.parentElement.remove()" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    `;

            // Hapus alert sebelumnya jika ada
            const existingAlert = document.getElementById('alert-error-js');
            if (existingAlert) {
                existingAlert.remove();
            }

            // Tambahkan alert setelah h1 (di dalam container yang sama)
            const heading = document.querySelector('.container h1');
            heading.insertAdjacentHTML('afterend', alertHtml);

            // Scroll ke alert
            setTimeout(() => {
                document.getElementById('alert-error-js').scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }, 100);
        }

        // Handle form submit - Show loading button
        document.querySelector('form').addEventListener('submit', function(e) {
            const messageInput = document.getElementById('message');
            const fileInput = document.getElementById('FileMateri');

            // Validasi: Pastikan ada input materi atau file
            if (!messageInput.value.trim() && !fileInput.files.length) {
                e.preventDefault();
                showErrorAlert('Mohon isi materi pembelajaran atau upload file!');
                return;
            }

            // Validasi panjang karakter maksimal 6000
            if (messageInput.value.trim().length > 6000) {
                e.preventDefault();
                showErrorAlert('Materi pembelajaran maksimal 6000 karakter!');
                return;
            }

            // Validasi ukuran file (max 2MB)
            if (fileInput.files.length > 0) {
                const fileSize = fileInput.files[0].size / 1024 / 1024; // MB
                if (fileSize > 2) {
                    e.preventDefault();
                    showErrorAlert('Ukuran file maksimal 2MB!');
                    return;
                }
            }

            // Jika validasi lolos, tampilkan loading
            document.getElementById('submitBtn').classList.add('hidden');
            document.getElementById('loadingBtn').classList.remove('hidden');
        });
    </script>
</body>

</html>
