<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <title>Website - Company Profile</title>

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="css/LineIcons.2.0.css">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- Tiny Slider  -->
    <link rel="stylesheet" type="text/css" href="css/tiny-slider.css">
    <!-- Tailwind css -->
    <link rel="stylesheet" type="text/css" href="css/tailwind.css">
  </head>

  <body>

    <!-- Header Area wrapper Starts -->
    {{-- <header id="header-wrap" class="relative"> --}}
      <!-- Navbar Start -->      
      {{-- <div class="fixed top-0 left-0 z-30 w-full duration-300 navigation"> --}}
          {{-- <div class="container"> --}}
          @include('frontend.Nav')
             @yield('Home')
             @yield('Portfolio')
             @yield('Gallery')
             @yield('Profile')
             @yield('Blog')
             @yield('Contact')
    <footer id="footer" class="py-16 bg-gray-800">
      <div class="container">
        <div class="flex items-center justify-center h-screen">
          <h3 class="text-xl font-bold text-white">Find us on</h3>
        
              <ul class="flex justify-start social-icons">
                <li class="mx-2">
                  <a href="#"
                    class="footer-icon hover:bg-indigo-500">
                    <i class="lni lni-facebook-original" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://twitter.com/ieurijal1"
                    class="footer-icon hover:bg-blue-400">
                    <i class="lni lni-twitter-original" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.instagram.com/rijaljayan1/"
                    class="footer-icon hover:bg-red-500">
                    <i class="lni lni-instagram-original" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mx-2">
                  <a href="https://www.linkedin.com/in/ieu-rijal-a45264229/"
                    class="footer-icon hover:bg-indigo-600">
                    <i class="lni lni-linkedin-original" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
        </div>
        <div class="flex flex-wrap">
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.2s">
         
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp" data-wow-delay="0.8s">
            <div class="mx-3 mb-8">
              
            </div>
          </div>
        </div>
      </div>     
    </footer> 
    <!-- Footer Section End -->

    <section class="py-6 bg-gray-800 border-t-2 border-gray-700 border-dotted">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full text-center">
            <p class="text-white">Designed and Developed by <a class="text-white duration-300 hover:text-blue-600" href="https://tailwindtemplates.co" rel="nofollow">Rizal Jayantoro</a></p>
          </div>
        </div>
      </div>
    </section>   

    <!-- Go to Top Link -->
    <a href="#" class="fixed bottom-0 right-0 z-20 flex items-center justify-center w-10 h-10 mb-5 mr-5 text-lg text-white duration-300 bg-blue-600 rounded-full back-to-top hover:bg-blue-400">
      <i class="lni lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
<!--     <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div> -->
    <!-- End Preloader -->
    
    <!-- All js Here -->
    <script src="js/wow.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/contact-form.js"></script>      
    <script src="js/main.js"></script>      
  </body>
</html>
