
 <nav class="navbar navbar-expand-lg navbar-light text-white orange px-5">
    <div class="col-1 px-2">
        <a class="navbar-brand" href="#">  <img src="{{asset('images/icones/lasylablogo.svg')}}" width="100" height="80" alt="">
        </a>
    </div>
    <div class="col-11 px-2 text-end ">
        <a href="{{ url(app()->getLocale() == 'fr'? 'en':'fr' ) }}">
            @if(app()->getLocale()=='fr')
            <img src="{{asset('images/en.png')}}" width='15'>
            @else
            <img src="{{asset('images/fr.png')}}" width='15'>
            @endif
        </a>
        <a href='#'  width="60" class="lik ">{{__("menu1")}}</a>
    
        <a class="button-action-g px-4 me-md-2">{{__("menu2")}}</a>
      </div>
  </nav>

