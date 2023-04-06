@extends('layout.app')
@section('content')
<div class="container-fluid bg-to">
    <nav class="navbar-lasylab navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="{{asset('images/logo-lasylab.png')}}" width="100" height="40" alt="">
    </a>
    <span class='text-left'>Bienvenue {{auth()->user()->firstname}}</span>
   
    </nav>

    <h1 class='py-4 text-center'>Quel est votre objectif cette année scolaire 2023?</h1>   
    <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                    <form method="" action="/choix2">
                    @csrf
                        <div class='form-group col-md-12 col-10  my-2 mx-2'> 
                            <input type="checkbox" id="but1" name='but1'>
                            <label class='bg-act'for="but1">COMPRENDRE DES NOTIONS DIFFICILES</label>
                        </div> 
                        <div class='form-group col-md-12 col-10  my-2 mx-2'> 
                            <input type="checkbox" id="but2" name='but2'>
                            <label  class='bg-act' for="but2">REUSSIR TON EXAMEN</label>
                        </div> 
                        <div class='form-group col-md-12 col-10  my-2 mx-2'> 
                            <input type="checkbox" id="but3" name='but3'>
                            <label  class='bg-act' for="but3">AMÉLIORE TES NOTES EN CLASSE</label>
                        </div> 
                        <div class='form-group col-md-12 col-10  my-2 mx-2'> 
                            <input type="checkbox" id="but4" name='but4'>
                            <label  class='bg-act' for="but4" >AVOIR LA MENTION</label>
                        </div> 
                    
                        </div>

                        <div class="form-group row justify-content-center my-3">
                            <div class=' col-md-3 col-8'> <button type='submit' class="button-action">Continuer😃</button></div>
                        </div>
                    </form>
        </div>  
        
</div>

@endsection