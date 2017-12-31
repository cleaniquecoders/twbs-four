<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
            <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>

            <ul class="nav nav-pills">
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"
                            href="#"
                            id="profile-dropdown"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="profile-dropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </div>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </ul>
        </nav>

        <main role="main" class="container">
            <div class="starter-template">
                @yield('content')
            </div>
        </main><!-- /.container -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('js/jquery.slim.min.js') }}" ></script>
        <script src="{{ asset('js/popper.min.js') }}" ></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    </body>
</html>
