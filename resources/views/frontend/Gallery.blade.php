@extends('frontend.Main')
@section('Gallery')
<!-- Gallery Section Start -->
     {{-- @foreach ($galleries as $gallery)  --}}
     @if ($galleries->count())
    <section id="Gallery" class="py-24 text-center">
      <p class="text-2xl font-bold">GAMBAR</p>
      <br>
      <br>
      <div class="container flex flex-wrap mx-auto">
        <div class="w-full p-2 rounded lg:w-1/3">
        <img src="{{('img/team/'.$galleries[1]->img)}}"
                alt="image">
        </div>
        <div class="w-full p-2 rounded lg:w-1/3">
            <img src="{{('img/team/'.$galleries[2]->img)}}"
                alt="image">
        </div>
        <div class="w-full p-2 rounded lg:w-1/3">
            <img src="{{('img/team/'.$galleries[3]->img)}}"
            alt="image">
        </div>
      </div>
        <br>
        <br>
         <p class="text-2xl font-bold ">VIDEO</p>
        <br>
        <br>
        <div class="container flex flex-wrap mx-auto">
          <div class="w-full p-2 rounded lg:w-1/3">
        <video width="300px" height="280px" controls>
        <source src="{{('img/'.$galleries[1]->video)}}">
        <source src="{{('img/'.$galleries[1]->video)}}">
        </video>
        </div>
        <div class="w-full p-2 rounded lg:w-1/3">
          <video width="290px" height="280px" controls>
          <source src="{{('img/'.$galleries[2]->video)}}">
          <source src="{{('img/'.$galleries[2]->video)}}">
          </video>
          </div>
          <div class="w-full p-2 rounded lg:w-1/3">
            <video width="300px" height="280px" controls>
            <source src="{{('img/'.$galleries[3]->video)}}">
            <source src="{{('img/'.$galleries[3]->video)}}">
            </video>
            </div>
          
          
    </section>              
   @endif
   {{-- @endforeach --}}
    
@endsection