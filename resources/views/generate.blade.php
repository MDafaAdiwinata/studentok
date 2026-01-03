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
            <h1 class="mb-2 md:mb-6 text-3xl font-bold text-[#202020] md:text-4xl font-inter">
                Quiz Generate
            </h1>
            <form class="flex flex-col gap-2 md:gap-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[2fr_1fr] gap-6 mt-16">
                    <!-- Textarea -->
                    <div class="">
                        <label for="message"
                            class="block mb-3 text-md lg:text-lg xl:text-xl font-medium text-[#1a1a1a] text-start">
                            Jelaskan materi pembelajaran di sini
                        </label>
                        <textarea id="message" style="resize: none;"
                            class="block p-3 w-full h-60 text-md lg:text-lg text-[#1a1a1a]/80 font-light bg-[#F0F2F5]/20 rounded-xl border border-[#1a1a1a]/40 focus:ring-[#1a1a1a] focus:border-[#1a1a1a]/40"
                            placeholder="yukk jelasin materi pembelajaran yang mau kamu jadikan quiz!"
                            ></textarea>
                    </div>
                    {{-- File Upload --}}
                    <div class="flex flex-col items-start justify-center w-full">
                        <p
                            class="block mb-3 text-md lg:text-lg xl:text-xl font-medium text-[#1a1a1a] text-start">
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
                                    <span class="font-semibold">
                                        Klik untuk
                                        mengunggah</span>
                                </p>
                                <p class="text-sm md:text-md lg:text-lg text-[#1a1a1a]/60">
                                    PDF, or WORD File
                                    (MAX. 2MB)
                                </p>
                            </div>
                            <input id="FileMateri" type="file" class="hidden"
                                accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                onchange="previewFileName('FileMateri', 'previewFileMateri')" />
                        </label>
                        <!-- Penampil nama file -->
                        <p id="previewFileMateri" class="mt-2 text-sm md:text-md text-[#1a1a1a]/80 italic"></p>
                    </div>
                </div>
                <button type="button"
                    class="w-full md:w-fit md:ms-auto text-[#f0f0f0] bg-[#36656B] border border-[#1a1a1a]/20 hover:bg-[#75B06F] hover:text-heading shadow-md hover:shadow-none font-semibold leading-5 rounded-full text-sm md:text-md lg:text-lg px-6 py-2 transiiton duration-300">
                    Submit
                </button>
            </form>
        </div>
    </section>

    {{-- Footer --}}
    <x-footer></x-footer>

    {{-- Input File - Name File Script --}}
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
    </script>
</body>

</html>
