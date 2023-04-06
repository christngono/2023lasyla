@extends('layout.app')
@section('content')
<div class="container-fluid bg-to">
<nav class="navbar-lasylab navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="{{asset('images/logo-lasylab.png')}}" width="100" height="40" alt="">
    </a>
    <span class='text-left'>Bienvenue {{auth()->user()->firstname}} </span>
   
</nav>

    <h1 class='py-4 text-center'>Choisi ton mode de paiement</h1>

    <div class="row justify-content-center my-3">
          <div class="col-6 col-md-2">
              <div class="formule-Card py-2 px-2 ">
                <div class="formule-header py-3 text-center">
                    <h4>OFFRE Premium</h4>
                    
                </div>
                 
                <div class="formule-price">
                    <span class='ml-2'>10 000F CFA</span>
                
                <ul>
                    <li>Fiches de cours</li>
                    <li>Epreuves corrigées</li>
                    <li>Chat avec des profs</li>
                    <li>Cours vidéo explicatifs</li>
                    <li>Emploi de temps personnalisé</li>
                    <li>Quiz</li>
                </ul>
                  <div class="mt-2 d-flex justify-content-center">
                   <a href="{{route('payment')}}" class="button-action">Payer la totalité</a>
                  </div>
                  <div class="mt-2 d-flex justify-content-center">
                    <a href="{{route('payment')}}" class="button-action-nof">Payer la moitié</a>
                </div>
              </div>
            </div>
          </div>
          <!-- offre gratuite -->
          <div class="col-6 col-md-2">
            <div class="formule-Card py-2 px-2 ">
              <div class="formule-header py-3 text-center">
                  <h4>ESSAIE Gratuit</h4>
                  
              </div>
               
              <div class="formule-price">
                  <span class='ml-2'>Tester</span>
              
              <ul>
                  <li>1 Fiche de cours</li>
                  <li>1 vidéo de cours</li>
                  <li>Poser des questions aux profs</li>
              </ul>
                <div class="my-2 py-2 d-flex justify-content-center">
                 <a href="{{route('accueil')}}" class="button-action">Commencer</a>
                </div>
               
            </div>
          </div>
        </div>

    </div>
    
  
</div>

@endsection