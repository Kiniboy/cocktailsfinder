@include('layout.header')
<body style="background-color: black">
    <div class="container pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <div class="jumbotron bg-dark">
            <h1 class="display-4">{{$cocktail->name}}</h1>
            <img class="card-img-top" src="../../public/img/acceuil2.jpg" style="width: 25rem;">
            <p class="lead">Composition Cocktail :</p>
            <hr class="my-4">
            <p> {{$cocktail->composition}}</p>
        </div>
    </div>
</body>
@include('layout.footer')



