@extends('layout.app')

@section('content')
<nav class="navbar-lasylab navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="{{asset('images/logo-lasylab.png')}}" width="100" height="40" alt="">
    </a>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Connecte toi!') }}</div>
                @foreach ($errors->all() as $error)
                <span class="text-danger text-center mt-1" role="">
                    <strong>{{ $error }}</strong>
                </span>
                 @endforeach
                <div class="card-body">
                    <form method="POST" action="{{ route('authenticate') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Pass lasylab') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                        <div class='col-md-6'>Tu n'as pas de compte?, <a href="{{route('onboard')}}" class="">👉🏾 Inscris-toi ici!</a></div>
                    </div>
                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('souviens de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row mb-0">
                          
                                <div class="row justify-content-center my-3">
                                    <div class=' col-md-3 col-8'> <button type="submit" class="button-action">Connexion😃</button></div>
                                </div>
                         
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
