@extends('layout.app')
@section('content')  
<div class="container-fluid bg-to">
    <nav class="navbar-lasylab navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="{{asset('images/logo-lasylab.png')}}" width="100" height="40" alt="">
    </a>
    <span class='text-left'>Bienvenue {{auth()->user()->firstname}}</span>
   
    </nav>
      <div class="row justify-content-center">
          <div class='col-12 col-md-10 text-center mt-5'>
                   <h3 class='r'>NOTE BIEN</h3>
                   <h5 class='r'>PAIEMENT</h5>
          <div class='d-flex justify-content-center'>

            <div class="alert alert-warning alert-dismissible fade show col-md-7 col-12 mt-3"style="font-size: 0.7rem;" role="alert">
              Effectue le paiement sur l'un des deux numeros ci-dessous  <strong class=''>ORANGE</strong> ou  <span class='boot'>MTN</span><br/>
                vous pouvez payer la totalité  <strong class=''>10 000F</strong> ou faire une avance de <span class='boot'> 5000f</span>
                <br/>Après le paiement,envoie ton  <strong class=''>nom et numero de tél</strong> à ces numéros <span class='boot'>6 77 51 88 62/ 6 90 96 41 18,</span>
                  pour qu'on active ton compte
                Le nom qui s'affiche est <strong class=''> Ngono christian leon.</strong>
            <br/>En suite tu recevras un  <strong class=''>PASS LASYLAB</strong> pour te connecter à lasylab
            <br/>Pour plus infos <strong class=''> : 6 77 51 88 62</strong>
            </div>
            </div>


        <div class='d-flex justify-content-center'> 
            <div class="col-md-5 col-12">
              <div class="formule-Card py-2 px-2 ">
                <div class="formule-header py-3 text-center">
                    <span>ON VOUS ACCOMPAGNE JUSQU'AU 30 JUIN:<br/> 10 000F</span>   
                </div>
                 
                <div class="formule-price">
                    <span class='ml-2 price' style="font-size: 0.9rem;">677518862 
                        <img src="{{asset('images/icones/mtn.png')}}" height=30>      
                    </span>
                    <span class='ml-2 price' style="font-size: 0.9rem;"> - 694744292
                        <img src="{{asset('images/icones/orange.png')}}" height=30> </span>
                
                <ul style="font-size: 0.7rem;">
                    <li>Fiches de cours</li>
                    <li>Epreuves corrigées</li>
                    <li>Chat avec des profs</li>
                    <li>Cours vidéo explicatifs</li>
                    <li>Emploi de temps personnalisé</li>
                    <li>Quiz</li>
                </ul>
              </div>
            </div>
        </div>    
          </div>
    </div>
</div>
@endsection