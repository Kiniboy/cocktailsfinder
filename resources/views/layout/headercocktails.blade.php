{{--@section('style')<style src="{{ elixir("assets/css/app.css") }}></style>@endsection--}}
<html lang="{{ app()->getLocale() }}">
{{--<link rel="stylesheet" href="{{ elixir("assets/css/app.css") }}">--}}
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!doctype html>
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
          integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin=""/>
    <style type="text/css">
        #map { /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
            height: 400px;
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Roboto">
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
