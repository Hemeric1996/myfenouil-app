<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyFenoui - Accueil</title>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
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
              <div class="text-center" id="footer">
                <p>
                  Copyright SHINOBI TEAM LOURD 2019
                </p>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
