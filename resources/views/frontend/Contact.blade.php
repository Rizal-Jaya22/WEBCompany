@extends('frontend.Main')
@section('Contact')

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
@endif --}}
<!-- Contact Section End -->
    
@endsection