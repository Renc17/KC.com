<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>K&C</title>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("/Images/douglas-o-SwnU0BlZiBA-unsplash.jpg");
                background-size: cover;
                background-position: center;
                color: white;
                font-family: 'Poppins', sans-serif;
                font-weight: 400;
                height: 100vh;
                margin: 0;
            }

            a{
                text-decoration: none;
                text-transform: uppercase;
            }

            .nav-item > a {
                padding: 15px;
                font-size: large;
                font-weight: 600;
                letter-spacing: .1rem;
            }

            .nav-item > a:hover {
                border-radius: 10px;
                background-color: rgba(255,255,255,0.2);
            }

            li {
                list-style: none;
                font-size: larger;
                font-weight: 600;
            }


        </style>
    </head>
    <body>

    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <div><img src="/Images/logo.png" alt="logo" style="height: 70px"></div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} {{ Auth::user()->surname }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}">
                                    {{ __('Profile') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <section class="mt-0 align-items-center d-flex hero">
        <div class="container ">
            <div class="row align-items-center d-flex justify-content-center">
                <div class="col-md-8 pb-5 text-center">
                    <h1 class="text-white font-weight-bold mb-3 mt-5" >Gjej Shtepine Tende te Re</h1>

                    <div class="tab-content" id="nav-tabContent">
                        <form action="/search" method="get" class="search-form" id="search-form">
                            <div class="mt-3 mb-1">
                                <div class="form-group col-md-6 m-auto">
                                    <input type="text" class="form-control typeahead" name="zona" value="" id="search_rental" placeholder="Blloku"/>
                                    <span class="help-block"></span>
                                </div>
                                <button class="btn btn-primary bg-dark border-dark mt-2" type="submit">Kerko</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="container-fluid">
        <div class="container footer fixed-bottom">
            <ol data-region="footer" class="row text-center justify-content-evenly">
                <li class=" col-md-3">
                    <a class="footer-link text-white" href="Extras/About.html" title="Copyright 2021 Tesla Motors">Real Estate@2021</a>
                </li>
                <li class="col-md-3">
                    <a class="footer-link text-white" href="#">Privacy &amp; Legal</a>
                </li>
                <li class="col-md-3">
                    <a class="footer-link text-white" href="Extras/Contact.html">Contact</a>
                </li>
                <li class=" col-md-3">
                    <a class="footer-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Get Newsletter
                    </a>
                    <div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h5>Be the first to receive the latest news, events and product updates.</h5>
                                    <div class="mt-3 mb-3">
                                        <input type="email" placeholder="Vendosni Email">
                                        <button type="button" class="btn btn-primary">Get Newsletter</button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" data-bs-dismiss="modal" viewBox="0 0 16 16">
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </footer>
    </body>
</html>
