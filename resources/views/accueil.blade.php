@extends('layout.apphome')

@section('content')
@include('partials.navbarhome')
<div class='d-flex justify-content-center'>
<div class="alert alert-warning alert-dismissible fade show col-md-3 col-10 mt-3" role="alert">
  <strong>Salut {{auth()->user()->firstname}}</strong>,bienvenue sur lasylab!😀
  <span type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </span>
</div>
</div>
<!-- end -message of welcom-->
<div class='d-flex justify-content-center  mt-2'>
  <h4 class='classroom'>{{auth()->user()->classroom}}</h4>
</div>
<div class='d-flex justify-content-center'>
    <div class="progress mt-3 col-md-6 col-6 ">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>
<div class="container">
<div class="row d-flex justify-content-around mt-5 ">


  <div class="col">
   
    <div class="card-lesson co-l"  style=";">
      <a href='{{route('ressource')}}'>
      <div class="lesson-img d-flex align-items-center">
      <img src="{{asset('images/icones/test.svg')}}" class="card-img-top" height='80' alt="...">
      </div>
      <div class="card-body text-center">
        <p class="card-text">COURS TEST</p>
      </div>
    </a>
    </div>
    
  </div>
    <div class="col">
     
      <div class="card-lesson co-n"  style="">
        <a href='{{route('payment')}}'>
        <div class="lesson-img d-flex align-items-center">
        <img src="{{asset('images/icones/math.svg')}}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <p class="card-text">MATHÉMATIQUES</p>
        </div>
      </a>
      </div>
      
    </div>
    <div class="col">
  
      <div class="card-lesson co-n" style="">
        <a href='{{route('payment')}}'>
        <div class="lesson-img d-flex align-items-center">
        <img src="{{asset('images/icones/physique.svg')}}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <p class="card-text">PHYSIQUE</p>
        </div>
      </div>
    </a>
    </div>
    <div class="col">
       <a href='{{route('payment')}}'>
      <div class="card-lesson co-n " style=";">
        <div class="lesson-img d-flex align-items-center">
        <img src="{{asset('images/icones/chimie.svg')}}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <p class="card-text">CHIMIE</p>
        </div>
      </div>
    </a>
    </div>
    <div class="col">
       <a href='{{route('payment')}}'>
      <div class="card-lesson co-n">
        <div class="lesson-img d-flex align-items-center">
        <img src="{{asset('images/icones/computer.svg')}}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <p class="card-text">INFORMATIQUE</p>
        </div>
      </div>
    </a>
    </div>
    <div class="col">
       <a href='{{route('payment')}}'>
      <div class="card-lesson co-n">
        <div class="lesson-img d-flex align-items-center">
        <img src="{{asset('images/icones/francais.svg')}}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <p class="card-text">FRANCAIS</p>
        </div> 
      </div>
    </a>
    </div>
    <div class="col">
       <a href='{{route('payment')}}'>
      <div class="card-lesson co-n">
        <div class="lesson-img d-flex align-items-center">
          <img src="{{asset('images/icones/philo.svg')}}" class="card-img-top" alt="...">
        </div>
        <div class="card-body text-center">
          <p class="card-text">PHILOSOPHIE</p>
        </div>
        </div>
      </a>
    </div>
    <div class="col">
       <a href='{{route('payment')}}'>
      <div class="card-lesson co-n">
          <div class="lesson-img d-flex align-items-center">
            <img src="{{asset('images/icones/svt.svg')}}" class="card-img-top" alt="...">
          </div>
          <div class="card-body text-center">
            <p class="card-text">SCIENCE</p>
          </div>
      </div>
    </a>
    </div>
  </div>

</div>
@include('partials.footer')
</div>

<!-- card 3-->

<!-- card 4-->

<!-- card 1-->

<!-- card 1-->




<!-- card 1-->

@endsection
