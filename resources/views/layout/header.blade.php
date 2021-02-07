{{--@section('style')<style src="{{ elixir("assets/css/app.css") }}></style>@endsection--}}
<html lang="{{ app()->getLocale() }}">
{{--<link rel="stylesheet" href="{{ elixir("assets/css/app.css") }}">--}}
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Roboto">
    <title>Cocktailfinder</title>
    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item active">
                    <a class="nav-link" href="/" ><img class="logonavbar"> </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="cocktails">COCKTAILS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus">A PROPOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus">S'INSCRIRE/SE CONNECTER</a>
                </li>
            </ul>
        </div>
    </nav>
    <img class = "headerimage"/>
</head>
