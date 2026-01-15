  <nav data-aos="fade-down" data-aos-duration="1500" data-aos-delay="1500" id="navbar"
      class="z-50 backdrop-blur-md fixed w-full start-0 end-0 top-0 transition duration-500">
      <div class="max-w-screen-md lg:max-w-screen-lg xl:max-w-screen-xl 2xl:max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-8 transition-all duration-300 ease-in-out"
          id="navbarContent">
          <!-- Logo -->
          <a href="#" class="flex items-center space-x-2 md:space-x-4 rtl:space-x-reverse">
              <img src="{{ asset('img/logo.svg') }}" class="h-10 md:h-12" alt="Studentok Quiz Logo" />
              <h1 class="text-[#1a1a1a] font-black text-2xl font-inter">
                  Studentok
              </h1>
          </a>

          <!-- HAMBURGER MENU (MOBILE) -->
          <button data-collapse-toggle="navbar-cta" type="button"
              class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-[#000]/50 rounded-lg lg:hidden hover:bg-[#000]/10 focus:outline-none focus:ring-2 focus:ring-[#000]/40"
              aria-controls="navbar-cta" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 1h15M1 7h15M1 13h15" />
              </svg>
          </button>

          <!-- NAVIGATION LINKS + TOMBOL DAFTAR/MASUK (MOBILE) -->
          <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-cta">
              <ul
                  class="text-lg flex flex-col font-light p-4 lg:p-0 mt-8 lg:bg-transparent border border-[#000]/20 bg-[var(--color-bg-secondary)] rounded-xl lg:space-x-10 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0">
                  <!-- Link Navigasi -->
                  <li>
                      <a href="/"
                          class="text-center lg:text-start mb-3 lg:mb-0 block py-2 px-3 lg:p-0 text-[#1a1a1a]/90 rounded-lg lg:bg-transparent lg:text-[#000]/60 hover:text-[#1a1a1a] transition duration-300">
                          Home
                      </a>
                  </li>
                  <li>
                      <a href="/generate"
                          class="text-center lg:text-start mb-3 lg:mb-0 block py-2 px-3 lg:p-0 text-[#1a1a1a]/90 rounded-lg lg:bg-transparent lg:text-[#000]/60 hover:text-[#1a1a1a]">
                          Quiz Generate
                      </a>
                  </li>
                  <li>
                      <a href="/try-quiz"
                          class="text-center lg:text-start mb-3 lg:mb-0 block py-2 px-3 lg:p-0 text-[#1a1a1a]/90 rounded-lg lg:bg-transparent lg:text-[#000]/60 hover:text-[#1a1a1a]">
                          Try Quiz
                      </a>
                  </li>
                  <li>
                      <a href="/feedback"
                          class="text-center lg:text-start mb-3 lg:mb-0 block py-2 px-3 lg:p-0 text-[#1a1a1a]/90 rounded-lg lg:bg-transparent lg:text-[#000]/60 hover:text-[#1a1a1a]">
                          Feedback
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  <script>
      // Script Bg transparant/ada
      window.addEventListener("scroll", function() {
          const navbar = document.querySelector("nav");

          if (window.scrollY > 0) {
              navbar.classList.add("bg-[#FFF2EB]/80");
              navbar.classList.remove("bg-transparent");
          } else {
              navbar.classList.remove("bg-[#FFF2EB]/80");
              navbar.classList.add("bg-transparent");
          }
      });
  </script>
