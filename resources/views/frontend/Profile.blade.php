@extends('frontend.Main')
@section('Profile')
<!-- Profile Section Start -->
@if ($profiles->count())
<section id="Profile" class="py-24 bg-red-800">
  <div class="container">
    <div class="flex justify-center mx-3">
      <div class="w-full lg:w-7/12">
        <div id="Profile" class="Profile">
          <!-- Profile item start -->
          <!-- component -->
<div class="h-screen bg-gray-200  dark:bg-gray-800   flex flex-wrap items-center  justify-center  ">
  <div class="container lg:w-2/6 xl:w-2/7 sm:w-full md:w-2/3    bg-white  shadow-lg    transform   duration-200 easy-in-out">
      <div class="flex justify-center px-5  -mt-12">
          <img class="h-32 w-32 bg-white p-2 rounded-full   " src="{{('img/testimonial/'.$profiles[0]->img)}}" alt="" />

      </div>
      <div class=" ">
          <div class="text-center px-14">
              <h2 class="text-gray-800 text-3xl font-bold">{{$profiles[2]->name}}</h2>
              <p class="text-gray-400 mt-2">{{$profiles[2]->title}}</p>
              <p class="mt-5 text-blue-600"> {{$profiles[2]->body}}</p>
          </div>
          <hr class="mt-6" />
          <div class="flex  bg-gray-50 ">
              <div class="text-center w-1/2 p-4 hover:bg-gray-100 cursor-pointer">
                  <p><span class="font-semibold">2.5 k </span> Followers</p>
              </div>
              <div class="border"></div>
              <div class="text-center w-1/2 p-4 hover:bg-gray-100 cursor-pointer">
                  <p> <span class="font-semibold">2.0 k </span> Following</p>
              </div>

          </div>
      </div>
  </div>
</div>

<br>
<br>
          <!-- Profile item end -->
          <!-- Profile item start -->
                 <!-- component -->
<div class="h-screen bg-gray-200  dark:bg-gray-800   flex flex-wrap items-center  justify-center  ">
  <div class="container lg:w-2/6 xl:w-2/7 sm:w-full md:w-2/3    bg-white  shadow-lg    transform   duration-200 easy-in-out">
      <div class="flex justify-center px-5  -mt-12">
          <img class="h-32 w-32 bg-white p-2 rounded-full   " src="{{('img/testimonial/'.$profiles[1]->img)}}" alt="" />

      </div>
      <div class=" ">
          <div class="text-center px-14">
              <h2 class="text-gray-800 text-3xl font-bold">{{$profiles[1]->name}}</h2>
              <p class="text-gray-400 mt-2">{{$profiles[1]->title}}</p>
              <p class="mt-5 text-blue-600"> {{$profiles[1]->body}}</p>
          </div>
          <hr class="mt-6" />
          <div class="flex  bg-gray-50 ">
              <div class="text-center w-1/2 p-4 hover:bg-gray-100 cursor-pointer">
                  <p><span class="font-semibold">2.5 k </span> Followers</p>
              </div>
              <div class="border"></div>
              <div class="text-center w-1/2 p-4 hover:bg-gray-100 cursor-pointer">
                  <p> <span class="font-semibold">2.0 k </span> Following</p>
              </div>

          </div>
      </div>
  </div>
</div>

<br>
<br>
          <!-- Profile item end -->
          <!-- Profile item start -->
                 <!-- component -->
<div class="h-screen bg-gray-200  dark:bg-gray-800   flex flex-wrap items-center  justify-center  ">
  <div class="container lg:w-2/6 xl:w-2/7 sm:w-full md:w-2/3    bg-white  shadow-lg    transform   duration-200 easy-in-out">
      <div class="flex justify-center px-5  -mt-12">
          <img class="h-32 w-32 bg-white p-2 rounded-full   " src="{{('img/testimonial/'.$profiles[0]->img)}}" alt="" />

      </div>
      <div class=" ">
          <div class="text-center px-14">
              <h2 class="text-gray-800 text-3xl font-bold">{{$profiles[0]->name}}</h2>
              <p class="text-gray-400 mt-2">{{$profiles[0]->title}}</p>
              <p class="mt-5 text-blue-600"> {{$profiles[0]->body}}</p>
          </div>
          <hr class="mt-6" />
          <div class="flex  bg-gray-50 ">
              <div class="text-center w-1/2 p-4 hover:bg-gray-100 cursor-pointer">
                  <p><span class="font-semibold">2.5 k </span> Followers</p>
              </div>
              <div class="border"></div>
              <div class="text-center w-1/2 p-4 hover:bg-gray-100 cursor-pointer">
                  <p> <span class="font-semibold">2.0 k </span> Following</p>
              </div>

          </div>
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
    
@endsection