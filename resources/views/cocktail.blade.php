@include('layout.header')
<body class="body_cocktail">
    <div class="container pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <div class="jumbotron bg-dark">
            <h1 class="display-4">{{$cocktail->name}}</h1>
            <hr class="my-4">
            <img class="card-img-top" src="../../public/img/acceuil2.jpg" style="width: 25rem;">
            <hr class="my-4">
            <p class="lead">Composition Cocktail :</p>
            <p> {{$cocktail->composition}}</p>
            <hr class="my-4">
            <form class="form-horizontal poststars" action="{{route('postStar', $cocktail->id)}}" id="addStar" method="POST">
                {{ csrf_field() }}
                <div class="form-group required">
                    <div class="col-sm-12">
                        <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                        <label class="star star-5" for="star-5"></label>
                        <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                        <label class="star star-1" for="star-1"></label>
                    </div>
                </div>
            </form>
        </div>
        </div>
        // accessible uniquement si loggé  isset($form) && !empty($form) ) //

</body>
<script>
    $('#addStar').change('.star', function(e) {
        $(this).submit();
    });
</script>
@include('layout.footer')



