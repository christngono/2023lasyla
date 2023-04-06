@extends('layout.apphome')
@section('content')
@include('partials.navbarhome')
<div class='container'>
    <div class="row justify-content-center">
        <span class='text-center block-lesson col-md-6 col-12 mt-3'>3- calcul de la derivée d'une fonction - PA</span>
    </div>
     <div class="row  justify-content-center">
        
        <video class="col-md-6 col-12" controls autoplay loop >
            <source src="{{asset('videos/Baraycentre1PDC.mp4')}}" type="video/mp4" />
          </video>
     </div>
     <div class="row d-flex justify-content-center my-3">
        <div class="col-md-5 col-12">
        <a href='{{route('payment')}}'class="button-action">Débloger tous les contenus😃</a>
        <a href="{{route('lessontest')}}" class="button-action-nof">Revenir</a>
      </div>
      </div>
  
</div>

@endsection