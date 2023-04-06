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
            <span class='sela'>{{__("sec1")}}</span>
         </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="lasy my-1">
               <img src="{{asset('images/icones/epreuve.svg')}}" alt="" height='60'>
               <span>{{__("sec5")}}</span>
            </div>
        </div>
           <div class="col-12 col-md-4">
            <div class="lasy my-1">
               <img src="{{asset('images/icones/video.svg')}}" alt="" height='60'>
               <span>{{__("sec2")}}</span>
            </div>
           </div>
           <div class="col-12 col-md-4">
            <div class="lasy my-1">
               <img src="{{asset('images/icones/formations.svg')}}" alt="" height='60'>
               <span>{{__("sec4")}}</span>
            </div>
           </div>
           <div class="col-12 col-md-4">
               <div class="lasy my-1">
                  <img src="{{asset('images/icones/cours.svg')}}" alt="" height='60'>
                  <span>{{__("sec3")}}</span>
               </div>
              </div>
              <div class="col-12 col-md-4">
               <div class="lasy my1">
                  <img src="{{asset('images/icones/entraide.svg')}}" alt="" height='60'>
                  <span>{{__("sec6")}}</span>
               </div>
              </div>
    </div>
      <div class="row pb-5 taille">
        <div class="col-12">
            <h2 class= 'bg-ti text-center py-4'>{{__("title1")}}</h2>
        </div>
    
         <div class="col-md-4 col-6 ">
               <div class='elmat' style="background-color: #FF6645">{{__("suject1")}}</div>
         </div> 

         <div class="col-md-4 col-6 ">
            <div class='elmat' style="background-color: #98D652">{{__("suject2")}}</div>
        </div> 

        <div class="col-md-4 col-6 ">
           <div class='elmat' style="background-color: #65BFE5">{{__("suject6")}}</div>
       </div> 
       
        <div class="col-md-4 col-6 ">
           <div class='elmat' style="background-color: #FCA837">{{__("suject5")}}</div>
        </div> 
        <div class="col-md-4 col-6 ">
           <div class='elmat' style="background-color: #7FD99A">{{__("suject4")}}</div>
        </div> 
        <div class="col-md-4 col-6 ">
            <div class='elmat' style="background-color: #FF6645">{{__("suject3")}}</div>
         </div> 
     </div>             

    <div class="row px-4 py-5 bg-white px-5 text-center" style="height:30rem;">
        <div class="col-12 " >
            <h2 class= 'bg-ti py-2'>{{__("title2")}}</h2>
        </div>
        <div class="col-12 py-1 ">
            <img src="{{asset('images/icones/1a.svg')}}" alt="" height='50'> <span class='pluva'>{{__("step1")}}</span>
        </div>
        <div class="col-12 py-1 ">
            <img src="{{asset('images/icones/2a.svg')}}" alt="" height='50'> <span class='pluva'>{{__("step2")}}</span>
        </div>
        <div class="col-12 py-1 ">
            <img src="{{asset('images/icones/3a.svg')}}" alt="" height='50'> <span class='pluva'>{{__("step3")}}</span>
        </div>
    
    </div>

        <div class="row text-center orange">
            <h2 class='bg-ti text-center py-4'>{{__("title3")}}</h2>
        </div>
     <div class="row justify-content-around sect-motiv orange py-5">
           
        <div class="card  cadocol-4 mt-1" style="width: 20rem;">
            <img src="{{asset('/images/all/present1.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">{{__("text1")}}</p>
            </div>
        </div>

          <!-- end--> 
           <div class="card cado col-3 mt-1" style="width: 20rem;">
            <img src="{{asset('/images/all/present2.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">{{__("text2")}}</p>
            </div>
        </div>
        <!-- end-->
           <div class="card cado col-4 mt-1" style="width: 20rem;">
            <img src="{{asset('/images/all/present3.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">{{__("text3")}} </p>
            </div>
          </div>
          <!-- end-->
    </div>
    <footer class="row justify-content-aound py-3 foot1">
            <div class="col-4 text-center">
               <span>{{__("footer1")}}</span>
            </div>
            <div class="col-4 text-center">
                <span>{{__("footer2")}}</span>
            </div>
            <div class="col-4 text-center">
                  <span>{{__("footer3")}}</span>
            </div>
            
        </footer>
        <div class="row foot2">
            <div class="col-12 text-center">
                <p>@copyright 2023 -Lasylab</p>
             </div>
     </div>
    
</div>



@endsection