@extends('layouts.app')

@section('content')
<div class="container text-center">
        <div class="row align-self-center">
          <div class="col-lg-4 col-md-1 col-sm-1 col-1">

          </div>
          <div class="col-lg-4 col-md-10 col-sm-10 col-10">
            <img src="images/coverFenouil.png" alt="logoFenouil" class="img-fluid logo-accueil">
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="form-group">
                <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} sans-bas" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre adresse mail"  value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group">
                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} sans-bas" id="password" placeholder="Votre mot de passe" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group">
                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} sans-bas" id="password-confirm" placeholder="Retapez votre mot de passe" name="password_confirmation" required>
              </div>

              <div class="form-group">
                <label for="departement">Département</label>
                <select name="departement" id="departement" class="form-control">
                  <option value="prospection" selected>Prospection</option>
                  <option value="assistant">Assistant de saisie</option>
                  <option value="gestionnaire">Gestionnaire administratif</option>
                  <option value="responsable">Responsable des données</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">
                  S'inscrire
              </button>

            </form>
          </div>
          <div class="col-lg-4 col-md-1 col-sm-1 col-1">

          </div>
        </div>
      </div>
@endsection
