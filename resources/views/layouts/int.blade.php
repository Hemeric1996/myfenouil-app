<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    -->
</head>
<body>
    <div id="app">
      <header>
        <div class="container align-items-center">
          <nav class="navbar navbar-expand-lg navbar-light topNavBar">
            <a class="navbar-brand" href="#">
              <img src="images/coverwhite.png" class="img-fluid logo-nav" alt="Logo" style="border-radius: 50%;" id="logo">
            </a>
            <button style="background-color:#fff;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->email }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest
              </ul>
            </div>
          </nav>
        </div>
      </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="text-center" id="footer">
        <p>
          Copyright SHINOBI TEAM 2019
        </p>
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          var id_client = $("#id_client").val();
          var article = $("#article").val();
          var quantite = $("#quantite").val();
          $("#id_client").change(function(){
            var id_clienttemp = $("#id_client").val();
            id_client=id_clienttemp;
          });
          $("#article").change(function(){
            var articletemp = $("#article").val();
            article = articletemp;
          });
          $("#quantite").change(function(){
            var quantitetemp = $("#quantite").val();
            quantite = quantitetemp;
          });
          $("#add").click(function(){
            if (id_client=="" || article=="" || quantite=="") {
                alert("Veuillez remplir tous les champs");
            }else {
              <?php
                $articles = DB::table('articles')->get();
                echo $articles;
                // $prix = \DB::table('articles')
                //   ->select('prix')
                //   ->where([
                //     ['numeroArticle', '=', article],
                //   ])
                //   ->take(1)
                //   ->get()
                //   ->first();
                //   echo $prix;
              ?>

            };
          });
        });
      </script>
</body>
</html>
