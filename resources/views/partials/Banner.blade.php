<div class="container col-xxl-10 py-5" >
    <div class="row flex-lg-row-reverse align-items-center g-2 py-5">
        <div class="col-12 col-sm-8 col-lg-6">
                <video class='video' autoplay preload="auto"  controls contextmenu="return false;" oncontextmenu="return false;" controlslist="nodownload">
                    <source  src="{{asset('videos/presentation.mp4')}}" type="video/mp4" />
                </video>
        </div>
        <div class="col-lg-6 banner-text">
            <h1 class="display-5 fw-bold lh-1 mb-3">{{__("title")}}</h1>
            <p class="lead">
                {{__("MESSAGE_ACCUEIL")}}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a class="button-action-r px-4 me-md-2" href="{{url('en/demo')}}">{{__("bouton1")}}</a>
            </div>
        </div>
    </div>
</div>