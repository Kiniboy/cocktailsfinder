@include('layout.headercocktails')
    <body style="background-color: black">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3">
                <img class="card-img-top" src="../../public/img/acceuil2.jpg" style="width: 25rem;">
            </div>
            <div class="col-xl-3">
                <h2 class="titrecocktail">{{$cocktail->name}}</h2>
            </div>
            <div class="col-xl-3">
                <h2 class="titre">Note du cocktail :</h2>

                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3">
                <p class="detail">Composition Cocktail :</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3">
                <p class="detail">{{$cocktail->composition}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h3 class="titre">Vous pouvez trouver ce Cocktail ici</h3>
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
    @include('layout.footercocktail')



