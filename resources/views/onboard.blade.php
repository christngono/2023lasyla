@extends('layout.app')
@section('content')
<div id="app" class="container-fluid">

   <div class="row hte"> 
      <!-- first block -->
      <div class="col-12 col-md-6 block-r">
        <nav class="navbar navbar-light ">
          <a class="navbar-brand" href="#">
            <img src="{{asset('images/logo-lasylab.png')}}" width="90" height="40" alt="">
          </a>
        </nav>
        <div class="row d-block d-sm-none">
          <p class='col-12 num text-center' >6 7751 88 62</p>
        <div class="col-12 col-md-12 py-2 hometexte">
          <h1>
            Prepare ta REUSSITE 2023 sans stress avec lasylab
          </h1>
           <p class='bp'><span class='exa'>BEPC</span> <span class='exa'>PROBATOIRE</span><span class='exa'>BACCALAUREAT</span></p><br/>
           <span>Quelque soit tes difficultés ou lacunes</span><br/>
           <span>Fiches de cours - vidéos explicatives<br/> Epreuves corrigées - suivi personnalisé</span>
        </div>
         <div class="col-12  d-flex justify-content-center">
          <img src="{{asset('images/imgAcc.png')}}" width="60%" alt="">
         </div>
        </div>
        
          <div class="row justify-content-center">
            <div class="col-md-6 col-12 formula my-3 py-3">
             <form method="POST" action="/user">
              <p class='text-center'>INSCRIPTION</p>
              @csrf
              <div class="row">
                <div class="col-6">
                    <label class="ft" for="name">Nom</label>
                    <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror 
                </div>
              <div class="col-6">
                <label class="ft" for="firstname">Prenom</label>
                <input type="text" name="firstname" class="form-control @error('firstname')is-invalid @enderror" id="firstname" placeholder="">
                @error('firstname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror 
          </div>
              
              <!-- end name-->
              </div>
               <div class="form-group">
                <label class="ft" for="phone">Téléphone</label>
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="">
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror  
              </div>
              <div class="form-group">
                <label class="classe" for="classroom">Classe</label>
                <select class="form-control @error('phone') is-invalid @enderror" name="classroom" id="classroom">
                  <option value='3ème'>3ème</option>
                  <option value='Première A' selected>Première A</option>
                  <option value='Première C'>Première C</option>
                  <option value='Première D'>Première D</option>
                  <option value='Terminale A'>Terminale A</option>
                  <option value='Terminale C'>Terminale C</option>
                  <option value='Terminale D'>Terminale D</option>
                </select>
              
              </div>
              <div class="form-group">
                <label class="ft" for="password">Pass lasylab</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" >
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror  
                 <a href="https://wa.me/237677518862?text=je%20voudrais%20savoir%20comment%20faire%20pour%20avoir%20le%20Pass%20lasylab
                 " class="password">👉Clique ici pour Obtenir ton pass lasylab</a>
              </div>

              <div class="form-group">
                <label for="profil">Profil</label>
                <select class="form-control" id="profil" name='profil'>
                  <option value='eleve' selected>Elève</option>
                  <option value='libre'>Apprenant libre</option>
                  <option value='parents'>parent</option>
                </select>
              </div>
  
              <div class="row justify-content-center" >
                <div class='col-md-6 col-6 mt-3'><button type='submit'  class="button-action">C'est parti!😃</button></div>  
              {{-- <div class='col-md-5 col-6'> <a href="{{route('onboard1')}}" class="button-action-nof">Faire un test</a></div> --}}
              </div>
            
           </form>
           <div class="row justify-content-center my-3 text-center">
            <div class='col-md-7 '> <a href="{{route('login')}}" class="">Déjà un compte, connecte toi</a></div>
            
            </div>
         </div>
         
          </div>
      </div>
     
      <!-- end of first block-->

      <!-- second block-->
      <div class="col-12 col-md-6 block-l d-none d-sm-block">
       <div class="row justify-content-center">
         <div class="col-12 col-md-10 py-5 hometexte ">
          <h1>
            Prepare ta REUSSITE 2023 sans stress avec lasylab
          </h1>
           <p class='bp'><span class='exa'>BEPC</span><span class='exa'>PROBATOIRE</span><span class='exa'>BACCALAUREAT</span></p><br/>
           <span>Quelque soit tes difficultés ou lacunes</span><br/>
           <span>Fiche de cours - vidéos explicatives- Quiz - pose tes questions - suivi personnalisé</span>
         </div>
         <div class="col-12 col-md-8">
          <img src="{{asset('images/imgAcc.png')}}" width="80%" alt="">
         </div>
          <div class='col-md-12 py-3 text-center '>
            <p>
              <a href="">Découvrir la méthodologie</a> -
               <a href="">Qui sommes nous?</a>
               <a href=""> - Aide</a>
             </p>
           
          </div>
       </div>   
    </div>
      <!-- end of block-->
    
</div>
@endsection




