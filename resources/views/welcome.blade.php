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
            <div class="container" id="article-right">
                <img class="container__image" src="../img/accueil.jpg">
                <div class="container__text">
                    <p class="lead">VOS SAVOUREUX COCKTAILS SUR TOULOUSE</p>
                    <hr class="my-4">
                    <p> Cherchez ou laissez vous tenter par un de nos nombreux cocktails et <br>nous vous indiquerons ou vous pourrez le trouver !</p>
                    <p class="lead">
{{--                    <div class="article-buttons"><a href="#">--}}
{{--                            <p><span class="bg"></span><span class="base"></span><span class="text">Chercher un Cocktail</span></p></a><a class="white" href="#">--}}
{{--                            <p><span class="bg"></span><span class="base"></span><span class="text">Chercher un Bar</span></p></a>--}}
{{--                    </div>--}}
                    </p>
                </div>
            </div>

            <div class="container">
{{--                <div class="article-buttons"><a href="#">--}}
{{--                        <p><span class="bg"></span><span class="base"></span><span class="text">Trouver un Bar</span></p></a><a class="white" href="#">--}}
{{--                        <p><span class="bg"></span><span class="base"></span><span class="text">Trouver un Cocktail</span></p></a><a class="transparent" href="#">--}}
{{--                        <p><span class="bg"></span><span class="base"></span><span class="text">Noter</span></p></a>--}}
{{--                </div>--}}
            </div>
{{--            <div class="jumbotron" style="background-color: rgba(255, 255, 255, .5);">--}}
{{--                <p class="lead">Le site regroupant les différents cocktails disponibles dans la ville de Toulouse.</p>--}}
{{--                <hr class="my-4">--}}
{{--                <p> Cherchez ou laissez vous tenter par un de nos nombreux cocktails et <br>nous vous indiquerons ou vous pourrez le trouver !</p>--}}
{{--                <p class="lead">--}}
{{--                    <a class="btn btn-primary btn-lg" href="cocktails" role="button">CHERCHER</a>--}}
{{--                </p>--}}
{{--            </div>--}}
        </div>
    </div>
    </body>
@include('layout.footer')
