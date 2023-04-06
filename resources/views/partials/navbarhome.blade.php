<nav class="navbar navbar-light bg-light d-none d-sm-block">
    <a class="navbar-brand" href="{{route('accueil')}}">
        <img  src="{{asset('images/logo-lasylab.png')}}" width="100" height="40" alt="">
    </a>

    <ul class="nav justify-content-end ">
        <li class="nav-item">
            <a class="nav-link active" href="{{route('accueil')}}"><img src="{{asset('images/icones/Apprendre.svg')}}"  alt="..."><span class='align-middle'>Apprendre</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <img src="{{asset('images/icones/revise.svg')}}"  alt="..."><span class='align-middle'>Reviser</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <img src="{{asset('images/icones/message.svg')}}"  alt="..."><span class='align-middle'>677518862</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">
                <img src="{{asset('images/icones/avatar.svg')}}"
                 alt="..."><span class='align-middle profil'></span>
                 {{auth()->user()->firstname}}
            </a>
          </li>
          <li class='nav-item'>
            <a href='/logout' class='nav-link text-left'>Se deconnecter</a>
          </li>
    </ul>
</nav>
<!-- menu mobile-->
<nav class="navbar navbar-light bg-light d-block d-sm-none">
   
    <ul class="nav justify-content-center ">
        <a class="navbar-brand" href="{{route('accueil')}}">
            <img  src="{{asset('images/logo-lasylab.png')}}" width="100" height="40" alt="">
        </a>
        <li class='nav-item'>
            <p class='nav-link text-danger font-italic'>Mode test</p>
          </li>
        <li class="nav-item">
            <a class="nav-link disabled">
                <img src="{{asset('images/icones/avatar.svg')}}"
                 alt="..."><span class='align-middle profil'></span>
                 {{auth()->user()->firstname}}
            </a>
          </li>
          {{-- <li class='nav-item'>
            <a href='/logout' class='nav-link text-left'>Se deconnecter</a>
          </li> --}}
    </ul>
</nav>
<!-- menu mobile pied de page-->
<nav class="navbar navbar-light bg-light fixed-bottom  d-block d-sm-none">
   <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('accueil')}}"><img src="{{asset('images/icones/Apprendre.svg')}}"  alt="..."><span class='align-middle'>Apprendre</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="{{asset('images/icones/revise.svg')}}"  alt="..."><span class='align-middle'>Reviser</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="{{asset('images/icones/message.svg')}}"  alt="..."><span class='align-middle'>Message</span>
                        </a>
                    </li>
    </ul>
</nav>