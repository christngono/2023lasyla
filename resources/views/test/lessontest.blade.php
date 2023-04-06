@extends('layout.apphome')
@section('content')
@include('partials.navbarhome')
   
<div class="container">
  <div class='row justify-content-center'>
    <div class="col text-center my-2">
      <span class='lesson-big'>Cours test:</span>
    </div>
  </div> 
  <div class='row justify-content-center'>
    <div class="col text-center my-3">
      <span class='block-lesson'>Leçons :</span>
    </div>
  </div>
  <div class='row justify-content-center'>
   
      <a href='{{route('resexemple')}}' class='col-md-7 col-12 bg-act my-2 mx-2'>1-Le barycentre de deux points pondérés - PC&D</a>
   
   
      <a class='col-md-7 col-12 bg-act my-2 mx-2 ' href='{{route('resexemple2')}}'>2-Racine carrée simplification d'une fraction - 3ème</a>
    
  
      <a class='col-md-7 col-12 bg-act my-2 mx-2 ' href='{{route('resexemple3')}}'>3-Calcul de la derivée d'une fonction - PA</a>
  
  </div>

  
 
 
</div>
  
@endsection