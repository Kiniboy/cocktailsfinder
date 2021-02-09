@include('layout.header')
    <body>

    <div class="container ">
        <div class="app-top">
            <h1 class="app-title text-center">CocktailsFinder</h1>
            <div class="search-filter">
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Trouve ton bonheur" name="name" id='name' required />
                    <label for="name" class="form__label">Trouve ton bonheur...</label>
                </div>
{{--                <input type="text" placeholder="Trouver mon bonheur..">--}}
                <div class="article-buttons">
                        <a class="white" href="#">
                            <p>
                                <span class="bg"></span><span class="base"></span><span class="text">Chercher parmis les cocktails</span>
                            </p>
                        </a>
                </div>
            </div>
        </div>
        <div class="app-center">
            <div class="container" id="article-left">
                <img class="container__image" src="{{URL::asset('/images/accueil.jpg')}}">
                <div class="container__text">
                    <h2 class="lead">FOCUS : COCKTAIL DE LA SEMAINE</h2>
                    <hr class="my-4">
                    <h3>Le Blue Lagon revisité</h3>
                    <ul>
                        <li>4 cl de Vodka</li>
                        <li>3 cl du curaçao</li>
                        <li>jus de pamplemousse</li>
                        <li>1 citron jaune</li>
                    </ul>
                    <p class="lead">
                        Réalisez la recette "Blue Lagoon" au shaker.<br>Pressez le jus d'un demi-citron, ajoutez dans le shaker avec les autres ingrédients et des glaçons. Frappez puis versez dans le verre en filtrant.<br>Afin qu'il soit plus frais et léger, remplissez auparavant le verre de glace pilée, et verser y le jus de pamplemousse.<br>Ajouter Une rondelle de citron jaune.
                    </p>
                </div>
            </div>
            <div class="container" id="article-right">
                <img class="container__image" src="{{URL::asset('/images/Le-Glou.jpg')}}">
                <div class="container__text">
                    <h2 class="lead">FOCUS : BAR DE LA SEMAINE</h2>
                    <hr class="my-4">
                    <h3>Le Glou</h3>
                    <p class="lead">
                        Ce café convivial aux murs et plafonds en bois coloré propose une carte de tapas, des cocktails et des rhums.
                    </p>
                    <ul>
                        <li>Adresse : 36 Boulevard de Strasbourg, 31000 Toulouse</li>
                        <li>Téléphone : 05 61 21 80 92</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </body>
@include('layout.footer')
