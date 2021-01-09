
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Administration des Bars</title>
</head>

<body style="background: #2ab27b">
<div class="container mt-4 pt-4 pb-4" style="background: white;">
    <h1>Gérer les bars</h1>

{{--    @if(Session::has('flash_message'))--}}
{{--        <div class="alert alert-success">--}}
{{--            {{ Session::get('flash_message') }}--}}
{{--        </div>--}}
{{--    @endif--}}

    <table class="table table-stripped">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Longitude</th>
            <th>Lattitude</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bars as $bar)
            <tr>
                <td> {{ $bar->name }} </td>
                <td> {{ $bar->adresse }} </td>
                <td> {{ $bar->longitude }} </td>
                <td> {{ $bar->laittude }} </td>
                <td>
                    <a href="" class="btn btn-secondary">Éditer</a>
                    <form method="post" action="" class="action" style="display: inline-block" onsubmit="return confirm('Êtes-vous vraiment sur ?)">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-right">
        <a href="" class="btn btn-primary">Créer un nouveau bar</a>
    </div>
</div>
</body>
</html>
