@extends('layout.app')
@section('content')  
<div id="app" class="container-fluid">

    <div class="row "> 
       <!-- first block -->
       <div class="col-12 col-md-6 block-r">
         <nav class="navbar navbar-light bg-light">
           <a class="navbar-brand" href="#">
             <img src="{{asset('images/logo-lasylab.png')}}" width="60" height="30" alt="">
           </a>
         </nav>
         <div class="row d-block d-sm-none">
         <div class="col-12 col-md-12 py-5 d-flex justify-content-center ">
           <p>6 7751 88 62</p>
           <h1 class='ti'>
             Prepares ton examen facilement avec lasylab
           </h1> 
          </div>
          <div class="col-12  d-flex justify-content-center">
           <img src="{{asset('images/imgAcc.png')}}"width="50%" alt="">
          </div>
         </div>
         
           <div class="row justify-content-center">
             <div class="col-md-6 col-12 formula my-3 py-3">
              <form method="POST" action="">
                <div class="form-group">
                     <label class="ft" for="shop">Nom</label>
                     <input type="text" name="nameshop" class="form-control" id="shop" placeholder="">
                </div>
                <div class="form-group">
                 <label class="ft" for="shop">Téléphone</label>
                 <input type="tel" name="nameshop" class="form-control" id="shop" placeholder="">
               </div>
               <div class="form-group">
                 <label class="ft" for="shop">Classe</label>
                 <option>3eme</option>
                    <option>PA</option>
                    <option>PC</option>
                    <option>TA</option>
                    <option>TD</option>
                    <option>TC</option>
               </div>
               <div class="form-group">
                 <label class="ft" for="shop">Mot de passe</label>
                 <input type="password" name="nameshop" class="form-control" id="shop" placeholder="">
               </div>
               <div class="form-group">
                 <label class="ft" for="shop">Profil</label>
                 <select class="form-control" id="exampleFormControlSelect1">
                    <option>Parent</option>
                    <option>Elève</option>
                    
                  </select>
               </div>
               <div class="form-group mt-2  d-flex justify-content-center">
                 <div class='button-action col-md-8'> <a href="" class="">C'est parti!😃</a></div>
                
               </div>
               
            </form>
           
          </div>
          
           </div>
       </div>
      
       <!-- end of first block-->
 
       <!-- second block-->
       <div class="col-12 col-md-6 block-l d-none d-sm-block">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 py-5 d-flex justify-content-center ">
           <h1>
             Prepares ton examen facilement avec lasylab
           </h1>
           
          </div>
          <div class="col-12 col-md-8">
           <img src="{{asset('images/imgAcc.png')}}" width="80%" alt="">
          </div>
           <div class='col-md-12 py-5 d-flex justify-content-center'>
             <p><a href="">Découvrir la méthodologie</a><br/>
               <a href="">Qui sommes nous?</a>
              </p>
            
           </div>
        </div>   
     </div>
       <!-- end of block-->
     
 </div>
@endsection