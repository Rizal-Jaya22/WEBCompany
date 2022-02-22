@extends('frontend.Main')
@section('Portfolio')
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
@endsection