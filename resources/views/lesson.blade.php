@extends('layout.apphome')
@section('content')
@include('partials.navbarhome')
   
<div class="container">
  <div class='row justify-content-center'>
    <div class="col text-center my-2">
      <span class='lesson-big'>MATHEMATIQUE:</span>
    </div>
  <div class='row justify-content-center'>
    <div class="col text-center my-3">
      <span class='block-lesson'>Lecons :</span>
    </div>
   

  </div>
  <div class='row justify-content-center'>
    @include('partials.itemlesson')
    @include('partials.itemlesson')
    @include('partials.itemlesson')
    @include('partials.itemlesson')
    @include('partials.itemlesson')
  </div>
 
</div>
  
@endsection