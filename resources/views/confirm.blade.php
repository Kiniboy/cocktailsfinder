@extends('layout/base')

{{--@section('contenu')--}}
{{--    {!! Form::open(['url' => 'users']) !!}--}}
{{--    {!! Form::label('email', 'Entrez votre email : ') !!}--}}
{{--    {!! Form::text('email') !!}--}}
{{--    {!! Form::label('mdp', 'Mot de passe :') !!}--}}
{{--    {!! Form::text('mdp') !!}--}}
{{--    {!! Form::submit('Envoyer !') !!}--}}
{{--    {!! Form::close() !!}--}}
{{--@stop--}}
        <!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
@section('contenu')
    <br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading">Contactez-moi</div>
            <div class="panel-body">
                Merci. Votre message a été transmis à l'administrateur du site. Vous recevrez une réponse rapidement.
            </div>
        </div>
    </div>
@stop
</body>
</html>

