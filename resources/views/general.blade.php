@extends('layout.appgeneral')
@section('content')

<div class='container-fluid' >
    @include('partials.SimpleNavbar')
    <div class="row" style='background-color:#F4900C;'>
        @include('partials.Banner')
    </div>
    <div class="row section1a py-4 px-4 justify-content-center">
        <div class="col-12 col-md-4">
         <div class="lasy my-1">
            <img src="{{asset('images/icones/exercice.svg')}}" alt="" height='60'>
            <span class='sela'>EPREUVES</span>
         </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="lasy my-1">
               <img src="{{asset('images/icones/epreuve.svg')}}" alt="" height='60'>
               <span>EXERCICE</span>
            </div>
        </div>
           <div class="col-12 col-md-4">
            <div class="lasy my-1">
               <img src="{{asset('images/icones/video.svg')}}" alt="" height='60'>
               <span>VIDEOS</span>
            </div>
           </div>
           <div class="col-12 col-md-4">
            <div class="lasy my-1">
               <img src="{{asset('images/icones/formations.svg')}}" alt="" height='60'>
               <span>FORMATIONS</span>
            </div>
           </div>
           <div class="col-12 col-md-4">
               <div class="lasy my-1">
                  <img src="{{asset('images/icones/cours.svg')}}" alt="" height='60'>
                  <span>COURS</span>
               </div>
              </div>
              <div class="col-12 col-md-4">
               <div class="lasy my1">
                  <img src="{{asset('images/icones/entraide.svg')}}" alt="" height='60'>
                  <span>ENTRAIDE</span>
               </div>
              </div>
    </div>
      <div class="row pb-5 taille">
        <div class="col-12">
            <h2 class= 'bg-ti text-center py-4'>CHOISIS UNE DISCIPLINE</h2>
        </div>
    
         <div class="col-md-4 col-6 ">
               <div class='elmat' style="background-color: #FF6645">MATHÉMATIQUES</div>
         </div> 

         <div class="col-md-4 col-6 ">
            <div class='elmat' style="background-color: #98D652">FRANCAIS</div>
        </div> 

        <div class="col-md-4 col-6 ">
           <div class='elmat' style="background-color: #65BFE5">SCIENCES</div>
       </div> 
       
        <div class="col-md-4 col-6 ">
           <div class='elmat' style="background-color: #FCA837">PROGRAMMATION</div>
        </div> 
        <div class="col-md-4 col-6 ">
           <div class='elmat' style="background-color: #7FD99A">MECATRONIQUE</div>
        </div> 
        <div class="col-md-4 col-6 ">
            <div class='elmat' style="background-color: #FF6645">PHYSIQUE</div>
         </div> 
     </div>             

    <div class="row px-4 py-5 bg-white ">
        <div class="col-12  text-center">
            <h2 class= 'bg-ti text-center py-4'>COMMENT FONCTIONNE LASYLAB</h2>
        </div>
        <div class="col-12 py-1  text-center">
            <img src="{{asset('images/icones/1a.svg')}}" alt="" height='50'> <span class='pluva'>Nous Construisons un parcour vous un parcours d'apprentissage sur mesure</span>
        </div>
        <div class="col-12 py-1 text-center">
            <img src="{{asset('images/icones/2a.svg')}}" alt="" height='50'> <span class='pluva'>Nous Construisons un parcour vous un parcours d'apprentissage sur mesure</span>
        </div>
        <div class="col-12 py-1 text-center">
            <img src="{{asset('images/icones/3a.svg')}}" alt="" height='50'> <span class='pluva'>Nous Construisons un parcour vous un parcours d'apprentissage sur mesure</span>
        </div>
    
    </div>

        <div class="row text-center orange">
            <h2 class='bg-ti text-center py-4'>LASYLAB c’est aussi...</h2>
        </div>
     <div class="row justify-content-around sect-motiv orange py-5">
           
        <div class="card  cadocol-4 mt-1" style="width: 20rem;">
            <img src="{{asset('/images/all/present1.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Nous suscitons des vocations grâce à la pratique</p>
            </div>
        </div>

          <!-- end--> 
           <div class="card cado col-3 mt-1" style="width: 20rem;">
            <img src="{{asset('/images/all/present2.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Nous donnons la possibilité aux gens de
                s’intégrer facilement dans l'environnement professionnel grâce en 
               nos formations techniques et spécialisées</p>
            </div>
        </div>
        <!-- end-->
           <div class="card cado col-4 mt-1" style="width: 20rem;">
            <img src="{{asset('/images/all/present3.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Nous permettons à des personnes marginalisées 
                ou en difficulté scolaire 
                d’avoir accès à une education de qualité </p>
            </div>
          </div>
          <!-- end-->
    </div>
    <footer class="row justify-content-aound py-3 foot1">
            <div class="col-4 text-center">
               <span>A propos de nous</span>
            </div>
            <div class="col-4 text-center">
                <span>Nos contenus</span>
            </div>
            <div class="col-4 text-center">
                  <span>Contact</span>
            </div>
            
        </footer>
        <div class="row foot2">
            <div class="col-12 text-center">
                <p>@copyright 2023 -Lasylab</p>
             </div>
     </div>
    
</div>



@endsection