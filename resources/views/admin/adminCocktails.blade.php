<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Administration des Cocktails</title>
</head>

<body>
<div class="container mt-4">
    <h1>Gérer les cocktails</h1>

    {{--    @for(message in app.flashes('success'))--}}

    {{--    <div class="alert alert-success">--}}
    {{--        {{ message }}--}}
    {{--    </div>--}}
    {{--@endfor--}}

    <table class="table table-stripped">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {{--        @foreach($cocktails as $cocktail)--}}
        <tr>

            <td>
                <a href="" class="btn btn-secondary">Éditer</a>
                <form method="post" action="" class="action" style="display: inline-block" onsubmit="return confirm('Êtes-vous vraiment sur ?)">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        {{--        @endforeach--}}
        </tbody>
    </table>
    <div class="text-right">
        <a href="" class="btn btn-primary">Créer un nouveau Cocktail</a>
    </div>
</div>
</body>
</html>
