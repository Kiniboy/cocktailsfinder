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
<style>
    .loginform {
        display: flex;
        flex-direction: column;
        max-width: 300px;
        min-width: 100px;
        height: 200px;
        background-color: #2ab27b;
        align-items: center;
        justify-content: center;
        margin: auto;
        padding: 100px;

    }

    .form-group {
        display: flex;
        flex-direction: column;
    }
</style>
<body>
<form class="loginform" method="POST" action="/contact" accept-charset="UTF-8">
    <h1>CONNEXION</h1>
    <input name="_token" type="hidden" value="pV1vWWdUqFDfYsBjKag43C3NvzbIC0lHtMnv9BpI">
    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
        <label for="email">Entrez votre email : </label>
        <input for="email" type="text" id="email">
    </div>
    <div class="form-group {!! $errors->has('message') ? 'has-error' : '' !!}">
        <label for="message">Message : </label>
        <input for="message" type="text" id="message">
    </div>
    <input style="margin-top: 20px" type="submit" value="ENVOYER">
</form>
</body>
</html>

