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
    <header id="header-wrap" class="relative">
      <!-- Navbar Start -->      
      <div class="fixed top-0 left-0 z-30 w-full duration-300 navigation">
          <div class="container">
              <nav class="relative flex items-center justify-between py-2 duration-300 navbar navbar-expand-lg">
                  <a class="navbar-brand" href="#Home">
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
                            <a class="page-scroll active" href="#Home">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#Portfolio">Portfolio</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#Gallery">Gallery</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#Profile">Profile</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#Blog">Blog</a>
                          </li>
                          <li class="nav-item">
                            <a class="page-scroll" href="#contact">Contact</a>
                          </li>
                      </ul>
                  </div>
                  <div class="hidden header-btn sm:block sm:absolute sm:right-0 sm:mr-16 lg:static lg:mr-0">
                    <a class="px-10 py-3 text-blue-600 duration-300 border border-blue-600 rounded-full hover:bg-blue-600 hover:text-white" href="#Profile">Tentang</a>
                  </div>
              </nav>
          </div>
      </div>
      <!-- Navbar End -->
    </header>
    <!-- Header Area wrapper End -->
    @foreach ($Homes as $Home)
        
    
    <!-- Home Area Start -->
    <section id="Home" class="pt-48 pb-10 bg-blue-100">
      <div class="container">
        <div class="flex justify-between">
          <div class="w-full text-center">
            <h2 class="mb-10 text-4xl font-bold leading-snug text-gray-700 wow fadeInUp" data-wow-delay="1s">{{$Home->body}}
              <br class="hidden lg:block"></h2>
            <div class="mb-10 text-center wow fadeInUp" data-wow-delay="1.2s">
              <a href="#"
                rel="nofollow"
                class="btn">Buat Sekarang</a>
            </div>
            <div class="text-center wow fadeInUp" data-wow-delay="1.6s">
              <img class="mx-auto img-fluid" src="img/hero.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    @endforeach
    <!-- Home Area End -->

    <!-- Portfolio Section Start -->
  @if ($portfolios->count())

  
  

        
    <section id="Portfolio" class="py-24">
      <div class="container">
        <div class="text-center">
        <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">{{$portfolios[0]->title}}</h2>
        </div>
        <div class="flex flex-wrap">
          <!-- Portfolio item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="0.3s">
              <div class="text-5xl icon">
                <i class="lni lni-cog"></i>
              </div>
              <div>
                <h3 class="service-title">{{$portfolios[1]->title}}</h3>
                <p class="text-gray-600">{{$portfolios[1]->body}}</p>
              </div>
            </div>
          </div>
          <!-- Portfolio item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="0.6s">
              <div class="text-5xl icon">
                <i class="lni lni-bar-chart"></i>
              </div>
              <div>
                <h3 class="service-title">{{$portfolios[2]->title}}</h3>
                <p class="text-gray-600">{{$portfolios[2]->body}}</p>
              </div>
            </div>
          </div>
          <!-- Portfolio item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="0.9s">
              <div class="text-5xl icon">
                <i class="lni lni-briefcase"></i>
              </div>
              <div>
                <h3 class="service-title">{{$portfolios[3]->title}}</h3>
                <p class="text-gray-600">{{$portfolios[3]->body}}</p>
              </div>
            </div>
          </div>
          <!-- Portfolio item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="1.2s">
              <div class="text-5xl icon">
                <i class="lni lni-pencil-alt"></i>
              </div>
              <div>
                <h3 class="service-title">{{$portfolios[4]->title}}</h3>
                <p class="text-gray-600">{{$portfolios[4]->body}}
                  ...</p>
              </div>
            </div>
          </div>
          <!-- Portfolio item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="1.5s">
              <div class="text-5xl icon">
                <i class="lni lni-mobile"></i>
              </div>
              <div>
                <h3 class="service-title">{{$portfolios[5]->title}}</h3>
                <p class="text-gray-600">{{$portfolios[5]->body}}</p>
              </div>
            </div>
          </div>
          <!-- Portfolio item -->
          <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="m-4 wow fadeInRight" data-wow-delay="1.8s">
              <div class="text-5xl icon">
                <i class="lni lni-layers"></i>
              </div>
              <div>
                <h3 class="service-title">{{$portfolios[6]->title}}</h3>
                <p class="text-gray-600">{{$portfolios[6]->body}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
    <!-- Portfolio Section End -->
    <!-- Gallery Section Start -->
    {{-- @foreach ($galleries as $gallery) --}}
    @if ($galleries->count())
    <section id="Gallery" class="py-24 text-center">
      <div class="container">
        <div class="text-center">
          <h2 class="mb-12 section-heading wow fadeInDown" data-wow-delay="0.3s">{{$galleries[0]->title}}</h2>
        </div>
        <div class="flex flex-wrap justify-center">
          <!-- Gallery Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="relative team-img">
                <img class="img-fluid" src="img/team/img1.jpg" alt="">
                <div class="team-overlay">
                  <ul class="flex justify-center">
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-indigo-500">
                        <i class="lni lni-facebook-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-blue-400">
                        <i class="lni lni-twitter-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-red-500">
                        <i class="lni lni-instagram-original" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="px-5 py-3 text-center">
                <h3 class="team-name">{{$galleries[1]->body}}</h3>
                <p>{{$galleries[1]->subbody}}</p>
              </div>
            </div>
          </div>

          <!-- Gallery Item Ends -->
          <!-- Gallery Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="relative team-img">
                <img class="img-fluid" src="img/team/img2.jpg" alt="">
                <div
                  class="team-overlay">
                  <ul class="flex justify-center">
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-indigo-500">
                        <i class="lni lni-facebook-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-blue-400">
                        <i class="lni lni-twitter-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-red-500">
                        <i class="lni lni-instagram-original" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="px-5 py-3 text-center">
                <h3 class="team-name">{{$galleries[2]->body}}</h3>
                <p>{{$galleries[2]->subbody}}</p>
              </div>
            </div>
          </div>
          <!-- Gallery Item Ends -->
          <!-- Gallery Item Starts -->
          <div class="max-w-sm sm:w-1/2 md:w-1/2 lg:w-1/3">
            <div class="team-item">
              <div class="relative team-img">
                <img class="img-fluid" src="img/team/img3.jpg" alt="">
                <div class="team-overlay">
                  <ul class="flex justify-center">
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-indigo-500">
                        <i class="lni lni-facebook-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-blue-400">
                        <i class="lni lni-twitter-original" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="mx-1">
                      <a href="#" class="social-link hover:bg-red-500">
                        <i class="lni lni-instagram-original" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="px-5 py-3 text-center">
                <h3 class="team-name">{{$galleries[3]->body}}</h3>
                <p>{{$galleries[3]->subbody}}</p>
              </div>
            </div>
          </div>
          <!-- Gallery Item Ends -->
        </div>
      </div>
    </section>              
   @endif
    <!-- Gallery Section End -->

    <!-- Profile Section Start -->
    @if ($profiles->count())
    <section id="Profile" class="py-24 bg-gray-800">
      <div class="container">
        <div class="flex justify-center mx-3">
          <div class="w-full lg:w-7/12">
            <div id="Profile" class="Profile">
              <!-- Profile item start -->
              <div class="item focus:outline-none">
                <div class="px-8 py-10 text-center border border-gray-900 rounded md:px-10">
                  <div class="text-center">
                    <p class="leading-loose text-gray-600">{{$profiles[0]->body}}</p>
                  </div>
                  <div class="w-24 h-24 mx-auto my-3 rounded-full shadow-md">
                    <img class="w-full p-2 rounded-full" src="{{('img/testimonial/'.$profiles[0]->img)}}" alt="">
                  </div>
                  <div class="mb-2">
                    <h2 class="mb-2 text-lg font-bold text-blue-600 uppercase">{{$profiles[0]->name}}</h2>
                    <h3 class="text-sm font-medium text-white">{{$profiles[0]->title}}</h3>
                  </div>
                </div>
              </div>
              <!-- Profile item end -->
              <!-- Profile item start -->
              <div class="item focus:outline-none">
                <div class="px-8 py-10 text-center border border-gray-900 rounded md:px-10">
                  <div class="text-center">
                    <p class="leading-loose text-gray-600">{{$profiles[1]->body}}</p>
                  </div>
                  <div class="w-24 h-24 mx-auto my-3 rounded-full shadow-md">
                    <img class="w-full p-2 rounded-full" src="{{('img/testimonial/'.$profiles[1]->img)}}"  alt="">
                  </div>
                  <div class="mb-2">
                    <h2 class="mb-2 text-lg font-bold text-blue-600 uppercase">{{$profiles[1]->name}}</h2>
                    <h3 class="text-sm font-medium text-white">{{$profiles[1]->title}}</h3>
                  </div>
                </div>
              </div>
              <!-- Profile item end -->
              <!-- Profile item start -->
              <div class="item focus:outline-none">
                <div class="px-8 py-10 text-center border border-gray-900 rounded md:px-10">
                  <div class="text-center">
                    <p class="leading-loose text-gray-600">{{$profiles[2]->body}} </p>
                  </div>
                  <div class="w-24 h-24 mx-auto my-3 rounded-full shadow-md">
                    <img class="w-full p-2 rounded-full" src="{{('img/testimonial/'.$profiles[0]->img)}}"  alt="">
                  </div>
                  <div class="mb-2">
                    <h2 class="mb-2 text-lg font-bold text-blue-600 uppercase">{{$profiles[2]->name}}</h2>
                    <h3 class="text-sm font-medium text-white">{{$profiles[2 ]->title}}</h3>
                  </div>
                </div>
              </div>
              <!-- Profile item end -->
              
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
    <!-- Profile Section End -->  

    <!-- Blog section Start --> 
    @if ($blogs->count())
    <section id="Blog" class="py-24">
      <div class="container">
        <div class="flex flex-wrap justify-center md:justify-start">
          
        </div>
      </div>
    </section>
    <!-- Blog Table Section End -->

    <!-- carousel-area Section Start -->
    <section class="py-32 bg-gray-800 carousel-area">
      <div class="container">
        <div class="flex">
          <div class="relative w-full">
            <div class="item focus:outline-none">
              <div class="px-8 py-10 text-center border border-gray-900 rounded md:px-10">
                <div class="text-center">
                  <p class="leading-loose text-gray-600">{{$blogs[0]->body}}</p>
                </div>
                <div class="w-24 h-24 mx-auto my-3 rounded-full shadow-md">
                  <img class="w-full p-2 rounded-full" src="{{('img/testimonial/'.$blogs[0]->img)}}" alt="">
                </div>
                <div class="mb-2">
                  <h2 class="mb-2 text-lg font-bold text-blue-600 uppercase">{{$blogs[0]->name}}</h2>
                  <h3 class="text-sm font-medium text-white">{{$blogs[0]->title}}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
    <!-- carousel-area Section End -->

    <!-- Contact Section Start -->
    @if ($contacts->count())
    <section id="contact" class="py-24">    
      <div class="container">
          <h2 class="mb-12 text-4xl font-bold tracking-wide text-gray-700 wow fadeInDown" data-wow-delay="0.3s">{{$contacts[0]->title}}</h2>
        </div>
        <div class="w-full md:w-1/2">
          <div class="ml-3 md:ml-12 wow fadeIn">
            <h2 class="mb-5 text-xl font-bold text-gray-700 uppercase">{{$contacts[0]->body}}</h2>
            <div>
              <div class="flex flex-wrap items-center mb-6">
                <div class="contact-icon">
                  <i class="lni lni-map-marker"></i>
                </div>
                <p class="pl-3">{{$contacts[0]->lokasi}}</p>
              </div>
              <div class="flex flex-wrap items-center mb-6">
                <div class="contact-icon">
                  <i class="lni lni-envelope"></i>
                </div>
                <p class="pl-3">
                  <a href="#" class="block">{{$contacts[0]->email}}</a>
                  
                </p>
              </div>
              <div class="flex flex-wrap items-center mb-6">
                <div class="contact-icon">
                  <i class="lni lni-phone-set"></i>
                </div>
                <p class="pl-3">
                  <a href="#" class="block">{{$contacts[0]->nohp}}</a>
              
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  @endif
  <!-- Contact Section End -->
  <!-- Footer Section Start -->
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
