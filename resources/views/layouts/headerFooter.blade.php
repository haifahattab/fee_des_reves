<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
    <script src="{{ url('./assets/js/app.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url('./assets/css/main.css') }}">
    <title>fée des rêves</title>
</head>

<body>
        <header class="header header--home fixed-top">
                <nav class="navbar navbar-expand-md">
                        <img class="header__logo logo ml-5" src="assets/logo/logo.png" alt="logo fée des rêves">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="https://img.icons8.com/android/34/ffffff/menu.png"/> </button> 
                    <div class="collapse navbar-collapse nav_list" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                                <li>
                                    <a href="{{ url('/') }}" class="nav__link">Accueil</a>
                                </li>
                                <li>
                                <a href="{{ url('/') }}#service" class="nav__link">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/') }}#portfolio" class="nav__link">Portfolio</a>
                                </li>
                                <li class="nav__item nav__item--home">
                                    <a href="{{ url('/contact') }}" class="nav__link">Contactez-nous</a>
                                </li>
                                <li class="nav__item nav__item--home">
                                    <a href="{{ url('/forum') }}" class="nav__link">Forum</a>
                                </li>
                        </ul>
                    </div>
                </nav>
            
        </header>

            

        @yield('content')


        <footer class="footer">
            <div class="row">
                <div class="offset-lg-2 col-lg-2 col-sm-12">
                    <img class="logo logo--footer" src="{{ url('./assets/logo/logo.png')}}" alt="logo"> 
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="footer__text">
                        <h4>CONTACTEZ-NOUS</h4>
                        <p>contact@feedesreves.com</p>
                        <p>(+33)7 12 34 56 78</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="footer__text">
                        <h4>06600 ANTIBES <br> FRANCE</h4>
                    </div>
                </div>
            </div>
            <p class="copy">Fée des rêves © 2021</p>
        </footer>
    </div>
</body>

</html>