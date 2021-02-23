    <!---------------------- header ------------------->
        @extends('layouts.headerFooter')
        @section('content')
    
    <!---------------------- body --------------------->
    <section class="hero">

        <div class="hero__text">
                <h1 class="heading-1">Confiez-nous vos rêves</h1>
                <a href="#portfolio" class="button__link ">
                    <button class="header__button button">Nos créations</button>
                </a>
            </div>
    </section><div class="main-content__wrapper">

    <!-------------------- section mission ------------>
    <section class="mission">
        <div class="row">
        <div class="mission__text">
            <div class="mission__text__heading">
                <h4 class="h4__color">QUELQUE CHOSE À PROPOS DE NOTRE</h4>
                <h2>MISSION</h2>
            </div>
            <p>Nous savons que le mariage est un jour spécial, plein d'émotions joyeuses, mais aussi un événement qui doit être pris en charge dans les moindres détails.
            </p>
            <p>Nous prenons tous les arrangements et les questions formelles de vos épaules, afin que vous puissiez simplement vous détendre et attendre ces beaux moments à venir.</p>
        </div>
        <div class="mission__img"></div>
        </div>
    </section>

    <!------------------- section services ------------------>
    <section class="main-tiles" id="service">
        <h3>NOS SERVICES</h3>
        <div class="icon-tiles__wrapper">
            <div class="icon-tiles__tile icon-tiles__one">
                <div class="icon-tiles__img icon-tiles__img-one"></div>
                <h4>Décoration élégante</h4>
                <p>Belle décoration de bon goût qui convient à vos préférences et à votre concept de cérémonie</p>
            </div>
            <div class="icon-tiles__tile icon-tiles__two">
                <div class="icon-tiles__img icon-tiles__img-two"></div>
                <h4>Arrangements de cérémonie</h4>
                <p>Représentation officielle à l'église et arrangements officiels avec des lieux de mariage en plein air
                </p>
            </div>
            <div class="icon-tiles__tile icon-tiles__three">
                <div class="icon-tiles__img icon-tiles__img-three"></div>
                <h4>Restauration & Gâteaux</h4>
                <p>Des plats haut de gamme et des confiseurs récompensés pour offrir le meilleur goût à vous et à vos invités</p>
            </div>
            <div class="icon-tiles__tile icon-tiles__four">
                <div class="icon-tiles__img icon-tiles__img-four"></div>
                <h4>photographie et vidéographie</h4>
                <p>Laissez-nous nous occuper de filmer votre journée spéciale sur des photographies uniques et des vidéos originales</p>
            </div>
        </div>
    </section>

        </div>

    <!-- portfolio section -->
    <section class="portfolio" id="portfolio">
        <h3>PORTFOLIO</h3>
        <div class="card-columns m-5">
            <div class="card">
                <img class="card-img img" src="./assets/images/img1.jpeg" alt="Card image cap">
            </div>

            <div class="card">
                <img class="card-img img" src="./assets/images/img2.jpg" alt="Card image cap">
            </div>

            <div class="card">
                <img class="card-img img" src="./assets/images/img11.jpeg" alt="Card image cap">
            </div>
            <div class="card">
                <img class="card-img img" src="./assets/images/img12.jpeg" alt="Card image cap">
            </div>
            <div class="card">
                <img class="card-img img" src="./assets/images/img5.jpeg" alt="Card image cap">
            </div>
            <div class="card">
                <img class="card-img img" src="./assets/images/img6.jpeg" alt="Card image cap">
            </div>
            <div class="card">
                <img class="card-img img" src="./assets/images/img8.jpeg" alt="Card image cap">
            </div>
            <div class="card">
                <img class="card-img img" src="./assets/images/img7.jpeg" alt="Card image cap">
            </div>
        </div>
        
        </section>
    </div>

    @endsection

   
    <!-------------------- footer ------------------->

