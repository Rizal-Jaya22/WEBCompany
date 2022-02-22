@extends('frontend.Main')
@section('Home')
@foreach ($Homes as $Home)
        
    
    <!-- Home Area Start -->
    <section id="Home" class="pt-48 pb-10 bg-blue-100">
      <div class="container">
        <div class="flex justify-between">
          <div class="w-full text-center">
            <h2 class="mb-10 text-4xl font-bold leading-snug text-gray-700 wow fadeInUp" data-wow-delay="1s">{{$Home->body}}
              <br class="hidden lg:block"></h2>
            <div class="mb-10 text-center wow fadeInUp" data-wow-delay="1.2s">
              <a href="/Contact"
                rel="nofollow"
                class="btn">Buat Sekarang</a>
            </div>
            <div class="text-center wow fadeInUp" data-wow-delay="1.6s">
              <img class="mx-auto img-fluid" src="{{("img/".$Home->img)}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
   
    @endforeach
    
@endsection