@extends('layout.app')
@section('content')
<div class="container-fluid bg-to">
    <nav class="navbar-lasylab navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="{{asset('images/logo-lasylab.png')}}" width="100" height="40" alt="">
        </a>
        <span class='text-left'>Bienvenue {{auth()->user()->firstname}}</span>
      
    </nav>

    <h1 class='py-4 text-center'>Sur quelle matière recontres tu des difficultés?</h1>
    <p class='text-center'>tu peux choisir plusieurs matières</p>
    
    <div class="row justify-content-center">
        <div class="col-md-4 col-12">
                <form method="" action="/choix3">
                   @csrf
                    <div class="row">
                            <div class='form-group col-md-3 col-5 mt-2 ml-2'> 
                                <input type="checkbox" id="matter1" name='matter1'>
                                <label class='bg-act'for="matter1">SCIENCE</label>
                            </div> 
                            <div class='form-group col-md-3 col-5   mt-2 ml-1'> 
                                <input type="checkbox" id="matter2" name='matter2'>
                                <label  class='bg-act' for="matter2">PHYSIQUE</label>
                            </div> 
                            <div class='form-group col-md-4 col-5   mt-2 ml-1'> 
                                <input type="checkbox" id="matter3" name='matter3'>
                                <label  class='bg-act' for="matter3">MATHÉMATIQUES</label>
                            </div> 
                            <div class='form-group col-md-3 col-5   mt-2 ml-1'> 
                                <input type="checkbox" id="matter4" name='matter4'>
                                <label  class='bg-act' for="matter4">INFORMATIQUE</label>
                            </div> 
                            <div class='form-group col-md-3 col-5   mt-2 ml-1'> 
                                <input type="checkbox" id="matter5" name='matter5'>
                                <label  class='bg-act' for="matter5" >FRANÇAIS</label>
                            </div> 
                            <div class='form-group col-md-3 col-5   mt-2 ml-1'> 
                                <input type="checkbox" id="matter6" name='matter6'>
                                <label  class='bg-act' for="matter6">PHILOSOPHIE</label>
                            </div> 
                            <div class='form-group col-md-3 col-5   mt-2 ml-1'> 
                                <input type="checkbox" id="matter7" name='matter7'>
                                <label  class='bg-act' for="matter7">CHIMIE</label>
                            </div> 
                    </div>
                    <div class="form-group row justify-content-center my-5">
                        <div class=' col-md-6 col-8'> <button type='submit' class="button-action">Continuer😃</button></div>
                    </div>
                </form>
        </div>  
    

</div>

@endsection