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
    <a href="https://icons8.com/icon/111482/stylo-à-bille">Stylo à bille icon by Icons8</a>
    <script src="{{ url('./assets/js/app.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url('./assets/css/main.css') }}">
    <title>fée des rêves</title>
</head>

<body>
    <div>
        <!-- hero image section -->
            <header class="header header--home fixed-top">
            <div class='row'>
                <div class="col-lg-2">
                <img class="header__logo logo ml-5" src="assets/logo/logo.png" alt="logo fée des rêves">
                </div>
                <div class="offset-lg-2 col-lg-8">
                <nav class="mt-5">
                    <ul class="nav__list nav__list--home">
                        <li class="nav__item nav__item--home">
                            <a href="{{ url('/') }}" class="nav__link">Accueil</a>
                        </li>
                        <li class="nav__item nav__item--home">
                        <a href="{{ url('/') }}#service" class="nav__link">Services</a>
                        </li>
                        <li class="nav__item nav__item--home">
                            <a href="{{ url('/') }}#portfolio" class="nav__link">Portfolio</a>
                        </li>
                        <li class="nav__item nav__item--home">
                            <a href="{{ url('/contact') }}" class="nav__link">Contactez-nous</a>
                        </li>
                        <li class="nav__item nav__item--home">
                            <a href="{{ url('/forum') }}" class="nav__link">Forum</a>
                        </li>
                    </ul>
                </nav>
                </div>
                </div>

            </header>

            

        @yield('content')


        <footer class="footer">
            <div class="footer__inner-wrapper">
                <div class="footer__column">
                    <img class="logo logo--footer" src="assets/logo/logo.png" alt="logo"> </div>
                <div class="footer__column">
                    <div class="footer__text">
                        <h4>CONTACTEZ-NOUS</h4>
                        <p>contact@feedesreves.com</p>
                        <p>(+33)7 12 34 56 78</p>
                    </div>
                </div>
                <div class="footer__column">
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