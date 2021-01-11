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
<h2>Prise de contact sur mon beau site</h2>
<p>Réception d'une prise de contact avec les éléments suivants :</p>
<ul>
    <li><strong>Nom</strong> : {{ $nom }}</li>
    <li><strong>Email</strong> : {{ $email }}</li>
    <li><strong>Message</strong> : {{ $texte }}</li>
</ul>

</body>
</html>

