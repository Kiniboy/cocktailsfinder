@include('resources.views.layout.header')

{{--@section('contenu')--}}
{{--    {!! Form::open(['url' => 'users']) !!}--}}
{{--    {!! Form::label('email', 'Entrez votre email : ') !!}--}}
{{--    {!! Form::text('email') !!}--}}
{{--    {!! Form::label('mdp', 'Mot de passe :') !!}--}}
{{--    {!! Form::text('mdp') !!}--}}
{{--    {!! Form::submit('Envoyer !') !!}--}}
{{--    {!! Form::close() !!}--}}
{{--@stop--}}

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
<form class="loginform" method="POST" action="/login" accept-charset="UTF-8">
    <h1>CONNEXION</h1>
    <input name="_token" type="hidden" value="pV1vWWdUqFDfYsBjKag43C3NvzbIC0lHtMnv9BpI">
    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
        <label for="email">Entrez votre email : </label>
        <input for="email" type="text" id="email">
    </div>
    <div class="form-group {!! $errors->has('mdp') ? 'has-error' : '' !!}">
        <label for="mdp">Mot de passe : </label>
        <input for="mdp" type="mdp" id="mdp">
    </div>
    <input style="margin-top: 20px" type="submit" value="CONNEXION">
</form>
</body>

@include('resources.views.layout.footer')
