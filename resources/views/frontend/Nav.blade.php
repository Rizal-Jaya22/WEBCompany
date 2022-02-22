<header id="header-wrap" class="relative">
  <!-- Navbar Start -->      
  <div class="fixed top-0 left-0 z-30 w-full duration-300 navigation">
      <div class="container">
      {{-- @include('frontend.Nav') --}}
          <nav class="relative flex items-center justify-between py-2 duration-300 navbar navbar-expand-lg">
              <a class="navbar-brand" href="/Home">
                <img src="img/logo.svg" alt="Logo">
              </a>
              <button class="block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
              </button>

              <div class="absolute left-0 z-20 hidden w-full px-5 py-3 duration-300 bg-white shadow collapse navbar-collapse lg:block top-100 mt-full lg:static lg:bg-transparent lg:shadow-none" id="navbarSupportedContent">
                  <ul class="items-center justify-center mr-auto navbar-nav lg:flex">
                      <li class="nav-item">
                        <a class="block py-2 pr-4 pl-3 text-red-700 border-b border-red-700 hover:bg-red-700 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-red-700 md:dark:hover:text-red-700 dark:hover:bg-red-700 dark:hover:text-red-700 md:dark:hover:bg-transparent dark:border-red-700" href="/Home">HOME</a>
                      </li>
                      <li class="nav-item">
                        <a class="block py-2 pr-4 pl-3 text-red-700 border-b border-red-700 hover:bg-red-700 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-red-700 md:dark:hover:text-red-700 dark:hover:bg-red-700 dark:hover:text-red-700 md:dark:hover:bg-transparent dark:border-red-700" href="/Portfolio">PORTFOLIO</a>
                      </li>
                      <li class="nav-item">
                        <a class="block py-2 pr-4 pl-3 text-red-700 border-b border-red-700 hover:bg-red-700 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-red-700 md:dark:hover:text-red-700 dark:hover:bg-red-700 dark:hover:text-red-700 md:dark:hover:bg-transparent dark:border-red-700" href="/Gallery">GALLERY</a>
                      </li>
                      <li class="nav-item">
                        <a class="block py-2 pr-4 pl-3 text-red-700 border-b border-red-700 hover:bg-red-700 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-red-700 md:dark:hover:text-red-700 dark:hover:bg-red-700 dark:hover:text-red-700 md:dark:hover:bg-transparent dark:border-red-700" href="/Profile">PROFILE</a>
                      </li>
                      <li class="nav-item">
                        <a class="block py-2 pr-4 pl-3 text-red-700 border-b border-red-700 hover:bg-red-700 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-red-700 md:dark:hover:text-red-700 dark:hover:bg-red-700 dark:hover:text-red-700 md:dark:hover:bg-transparent dark:border-red-700" href="/Blog">BLOG</a>
                      </li>
                      <li class="nav-item">
                        <a class="block py-2 pr-4 pl-3 text-red-700 border-b border-red-700 hover:bg-red-700 md:hover:bg-transparent md:border-0 md:hover:text-red-700 md:p-0 dark:text-red-700 md:dark:hover:text-red-700 dark:hover:bg-red-700 dark:hover:text-red-700 md:dark:hover:bg-transparent dark:border-red-700" href="/Contact">CONTACT</a>
                      </li>
                  </ul>
              </div>
              <div class="hidden header-btn sm:block sm:absolute sm:right-0 sm:mr-16 lg:static lg:mr-0">
                <a class="px-10 py-3 text-blue-600 duration-300 border border-blue-600 rounded-full hover:bg-blue-600 hover:text-white" href="#Profile">Tentang</a>
              </div>
          </nav>
      </div>
  </div>