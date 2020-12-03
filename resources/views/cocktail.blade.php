@section('menu')
    {{--@section('style')<style src="{{ elixir("assets/css/app.css") }}></style>@endsection--}}
    <html lang="{{ app()->getLocale() }}">
    {{--<link rel="stylesheet" href="{{ elixir("assets/css/app.css") }}">--}}
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
    <!doctype html>
    <head>
        <meta charset="UTF-8">
        <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
              integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
              crossorigin=""/>
        <style type="text/css">
            #map { /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
                height: 400px;
            }
        </style>
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.google.com/specimen/Roboto">
        <!-- rating.js file -->
        <script src="js/addons/rating.js"></script>
        <title>Cocktailfinder</title>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav nav-fill w-100">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">COCKTAILS <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LIEUX</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">A PROPOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ESPACE MEMBRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">S'INSCRIRE/SE CONNECTER</a>
                    </li>
                </ul>
            </div>
        </nav>
    </head>
    <body style="background-color: black">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3">
                <img class="card-img-top" src="../../public/img/acceuil2.jpg" style="width: 25rem;">
            </div>
            <div class="col-xl-3">
                <h1 class="titre">Nom Cocktail</h1>
            </div>
            <div class="col-xl-3">
                <h1 class="titre">Note du cocktail :</h1>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3">
                <p>Composition Cocktail :</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3">
                <p>Ingrédients from back *for_from_back*</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h4 class="titre">Vous pouvez trouver ce Cocktail ici :</h4>
            </div>
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-3" id="map">
            <!-- Fichiers Javascript -->
            <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
                    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
                    crossorigin=""></script>
            <script type="text/javascript">
                // On initialise la latitude et la longitude de Toulouse (centre de la carte)
                var lat = 43.6043;
                var lon = 1.4437;
                var macarte = null;

                // Fonction d'initialisation de la carte
                function initMap() {
                    // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                    macarte = L.map('map').setView([lat, lon], 11);
                    // Leaflet ne récupère pas les cartes sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                        // Il est toujours bien de laisser le lien vers la source des données
                        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                        minZoom: 1,
                        maxZoom: 20
                    }).addTo(macarte);
                }

                window.onload = function () {
                    // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
                    initMap();
                };
            </script>
        </div>
    </div>
    </body>
    <footer class="page-footer font-small blue fixed-bottom">

        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="http://www.cesi.fr"> Site réalisé dans le cadre de la formation RIL 2019</a>
        </div>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $('.navTrigger').click(function () {
            $(this).toggleClass('active');
            console.log("Clicked menu");
            $("#mainListDiv").toggleClass("show_list");
            $("#mainListDiv").fadeIn();

        });
    </script>

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function () {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    </html>

