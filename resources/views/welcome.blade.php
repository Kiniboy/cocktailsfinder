@include('layout.header')
    <body>

    <div class="container mx-auto text-center">
        <div class="app-top">
            <h1 class="app-title">CocktailsFinder</h1>
        </div>
        <div class="app-center">
            <div class="container" id="article-right">
                <img class="container__image">
                <div class="container__text">
                    <p class="lead">Le site regroupant les différents cocktails disponibles dans la ville de Toulouse.</p>
                    <hr class="my-4">
                    <p> Cherchez ou laissez vous tenter par un de nos nombreux cocktails et <br>nous vous indiquerons ou vous pourrez le trouver !</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="cocktails" role="button">CHERCHER</a>
                    </p>
                </div>
            </div>
            <hr class="divider-app">
            <div class="container" id="article-left">
                <img class="container__image" src="https://mtdata.ru/u7/photo53A0/20946911428-0/original.jpg#20946911428">
                <div class="container__text">
                    <p class="lead">Le site regroupant les différents cocktails disponibles dans la ville de Toulouse.</p>
                    <hr class="my-4">
                    <p> Cherchez ou laissez vous tenter par un de nos nombreux cocktails et <br>nous vous indiquerons ou vous pourrez le trouver !</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="cocktails" role="button">CHERCHER</a>
                    </p>
                </div>
            </div>
            <div class="jumbotron" style="background-color: rgba(255, 255, 255, .5);">
                <p class="lead">Le site regroupant les différents cocktails disponibles dans la ville de Toulouse.</p>
                <hr class="my-4">
                <p> Cherchez ou laissez vous tenter par un de nos nombreux cocktails et <br>nous vous indiquerons ou vous pourrez le trouver !</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="cocktails" role="button">CHERCHER</a>
                </p>
            </div>
        </div>
        <div class="app-bottom">
            <p class="lead">De nombreux bars à Cocktails répertoriés</p>
            <hr class="my-4">
            <p> Cherchez ou laissez vous tenter par un de nos nombreux cocktails et <br>nous vous indiquerons ou vous pourrez le trouver !</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="cocktails" role="button">CHERCHER</a>
            </p>
        </div>
    </div>
    </body>
@include('layout.footer')
