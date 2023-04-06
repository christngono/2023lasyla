@extends('layout.apphome')
@section('content')
@include('partials.navbarhome')

<div class='d-flex justify-content-center  mt-5'>
    <h4 class='classroom'>RESSOURCES TEST</h4>
  </div>
  <div class="container">
  <div class="row d-flex justify-content-around mt-5">

    <div class="col">
      <a href='{{route('lessontest')}}'>
      <div class="card-lesson co-l"  style=";">
        <div class="lesson-img d-flex align-items-center">
        <img src="{{asset('images/icones/math.svg')}}" class="card-img-top" height='80' alt="...">
        </div>
        <div class="card-body text-center">
          <p class="card-text">VIDEO</p>
        </div>
      
      </div>
    </a>
    </div>
        <div class="col">
          <div class="card-lesson co-n"  style=";">
            <a href="{{Route('payment')}}">
            <div class="lesson-img d-flex align-items-center">
            <img src="{{asset('images/icones/fichecours.svg')}}" class="card-img-top" height='80' alt="...">
            </div>
            <div class="card-body text-center">
              <p class="card-text">COURS</p>
            </div>
          
          </div>
        </a>
        </div>
        <div class="col">
          <div class="card-lesson co-n"  style=";">
            <a href="{{Route('payment')}}">
            <div class="lesson-img d-flex align-items-center">
            <img src="{{asset('images/icones/fichecours.svg')}}" class="card-img-top" height='80' alt="...">
            </div>
            <div class="card-body text-center">
              <p class="card-text">EPREUVES CORRIGÉES</p>
            </div>
          
          </div>
        </a>
        </div>
        <div class="col">
          <div class="card-lesson co-n"  style=";">
            <a href="{{Route('payment')}}">
            <div class="lesson-img d-flex align-items-center">
            <img src="{{asset('images/icones/fichecours.svg')}}" class="card-img-top" height='80' alt="...">
            </div>
            <div class="card-body text-center">
              <p class="card-text">ASTUCES POUR L'EXAMEN</p>
            </div>
          
          </div>
        </a>
        </div>
        <div class="col">
          <div class="card-lesson co-n"  style=";">
           <a href="{{Route('payment')}}">
            <div class="lesson-img d-flex align-items-center">
            <img src="{{asset('images/icones/quiz.svg')}}" class="card-img-top" height='80' alt="...">
            </div>
            <div class="card-body text-center">
              <p class="card-text">Quiz</p>
            </div>
          </a>
          </div>
        </div>
  </div>
</div>
@endsection
   