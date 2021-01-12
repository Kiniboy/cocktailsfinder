<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ajouter un Bar</title>
</head>
<style>
    *{
        max-width: 900px;
        justify-content: center;
        margin: auto
    }
</style>
<body>
<h1>Ajouter un Bar</h1>

{!! form($form) !!}

{{--<form method="post"  action="{{ url('cocktail.post') }}" class="form-create" style="max-width: 900px; justify-content: center; margin: auto">--}}
{{--    {{csrf_field()}}--}}
{{--    <div class="form-group">--}}
{{--        <label class="title-input">Nom</label>--}}
{{--        <input type="text" class="form-control" id="inputName" aria-describedby="nom" placeholder="Ecrire le nom">--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label class="title-input">Composition</label>--}}
{{--        <input type="text" class="form-control" id="inputComposition" placeholder="Écrire la composition">--}}
{{--    </div>--}}
{{--    <a href="{{ url('admin/cocktails') }}" type="submit" class="btn btn-primary">Créer</a>--}}
{{--</form>--}}
{{--</body>--}}
