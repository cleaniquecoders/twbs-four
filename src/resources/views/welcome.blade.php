<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Styles -->
        <style>
            body {
              padding-top: 5rem;
            }
            .starter-template {
              padding: 3rem 1.5rem;
              text-align: center;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">Laravel</a>

            <ul class="nav nav-pills">
                @auth
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                @else
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </nav>

        <main role="main" class="container">

          <div class="starter-template">
            <h1>Laravel</h1>

            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
          </div>

        </main><!-- /.container -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('js/jquery.slim.min.js') }}" ></script>
        <script src="{{ asset('js/popper.min.js') }}" ></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    </body>
</html>
