@extends('layouts.app')

@section('content')
<div class="container">
  <ul class="nav justify-content-end">
    @if (Route::has('login'))
    <li class="nav-item">
      @auth
      <a href="{{ url('/home') }}">Home</a>
      @else
      <!-- <a href="{{ route('login') }}">Login</a> -->
    </li>
    <li class="nav-item">
        @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
        @endif
      @endauth
    @endif
    </li>
  </ul>
</div>
<div class="container text-center">
      <div class="row align-self-center">
        <div class="col-lg-4 col-md-1 col-sm-1 col-1">

        </div>
        <div class="col-lg-4 col-md-10 col-sm-10 col-10">
          <img src="images/coverFenouil.png" alt="logoFenouil" class="img-fluid logo-accueil">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} sans-bas" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre adresse mail" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} sans-bas" id="exampleInputPassword1" placeholder="Votre mot de passe" required>
              @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
            <div class="form-group">
              <ul>
                <li>
                  <a href="{{ route('register') }}">Pas de compte ? Inscrivez vous ici</a>
                </li>
                <li>
                  <a href="{{ route('password.request') }}">Mot de passe oublié ? Réinitialisez le ici</a>
                </li>
              </ul>
            </div>
            <button type="submit" class="btn btn-blue">Se connecter</button>
          </form>
        </div>
        <div class="col-lg-4 col-md-1 col-sm-1 col-1">

        </div>
      </div>
    </div>
@endsection
