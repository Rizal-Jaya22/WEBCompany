@extends('frontend.Main')
@section('Blog')

@if ($blogs->count())
<!-- Blog section Start --> 
<section class="relative py-20 overflow-hidden bg-blue-800 2xl:py-40">
    <div class="container px-4 mx-auto">
      <div class="text-center mb-14">
        <span class="text-lg font-bold text-blue-400">What&apos;s new at Shuffle</span>
        <h2 class="mt-8 text-5xl font-bold text-white font-heading">Latest blog</h2>
      </div>
      <div class="flex flex-wrap -m-6">
        <div class="relative w-full p-6 lg:w-1/3">
          <img class="absolute top-0 left-0 hidden mt-24 -ml-40 lg:block" src="zospace-assets/lines/left-line.svg" alt="">
          <div class="relative z-10 bg-gray-700 rounded-lg">
            <div class="relative mb-8 h-52">
              <img class="object-cover object-top w-full h-full rounded-lg" src="{{('img/'.$blogs[0]->img)}}" alt="">
              <div class="absolute bottom-0 left-0 inline-block px-3 pt-1 pb-3 mb-6 ml-8 bg-white border-t-4 border-blue-500 rounded-b-2xl">
                <p class="text-xl font-bold">{{$blogs[0]->body}}</p>
                <p class="text-xs text-gray-300 uppercase">{{$blogs[0]->name}}</p>
              </div>
            </div>
            <div class="pb-10 px-14"><a class="inline-block pt-4 text-lg font-bold text-white border-t border-gray-400 hover:text-gray-100" href="#">{{$blogs[0]->title}}</a></div>
          </div>
        </div>
        <div class="relative w-full p-6 lg:w-1/3">
          <img class="absolute top-0 left-0 hidden mt-24 lg:block -ml-14" src="zospace-assets/lines/right-line.svg" alt="">
          <div class="relative z-10 bg-gray-700 rounded-lg lg:mt-24">
            <div class="relative mb-8 h-52">
              <img class="object-cover w-full h-full rounded-lg" src="{{('img/'.$blogs[1]->img)}}" alt="">
              <div class="absolute bottom-0 left-0 inline-block px-3 pt-1 pb-3 mb-6 ml-8 bg-white border-t-4 border-blue-500 rounded-b-2xl">
                <p class="text-xl font-bold">{{$blogs[1]->body}}</p>
                <p class="text-xs text-gray-300 uppercase">{{$blogs[1]->name}}</p>
              </div>
            </div>
            <div class="pb-10 px-14"><a class="inline-block pt-4 text-lg font-bold text-white border-t border-gray-400 hover:text-gray-100" href="#">{{$blogs[1]->title}}</a></div>
          </div>
        </div>
        <div class="relative w-full p-6 lg:w-1/3">
          <img class="absolute top-0 right-0 hidden mt-24 mr-64 lg:block" src="zospace-assets/lines/left-line.svg" alt="">
          <div class="relative z-10 bg-gray-700 rounded-lg">
            <div class="relative mb-8 h-52">
              <img class="object-cover w-full mb-8 rounded-lg h-52" src="{{('img/'.$blogs[2]->img)}}" alt="">
              <div class="absolute bottom-0 left-0 inline-block px-3 pt-1 pb-3 mb-6 ml-8 bg-white border-t-4 border-blue-500 rounded-b-2xl">
                <p class="text-xl font-bold">{{$blogs[1]->body}}</p>
                <p class="text-xs text-gray-300 uppercase">{{$blogs[2]->name}}</p>
              </div>
            </div>
            <div class="pb-10 px-14"><a class="inline-block pt-4 text-lg font-bold text-white border-t border-gray-400 hover:text-gray-100" href="#">{{$blogs[2]->title}}</a></div>
          </div>
          <img class="absolute top-0 right-0 hidden mt-24 -mr-32 lg:block" src="zospace-assets/lines/right-line.svg" alt="">
        </div>
      </div>
      <div class="text-center mt-14 lg:mt-24"><a class="inline-block px-12 py-5 mr-4 font-bold text-dark transition duration-200 bg-blue-500 rounded-full hover:bg-blue-600" href="https://musttoro22.blogspot.com/">See all</a></div>
    </div>
  </section>
  @endif
