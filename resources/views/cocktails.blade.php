@include('layout.header')
<body class="bodyWithBackground">
<!-- filter buttons -->
<div class="btn-toolbar">
    <div class="btn-group">
        <button href="#" class="btn btn-primary">1</button>
        <button href="#" class="btn btn-primary">2</button>
        <button href="#" class="btn btn-primary">3</button>
        <button href="#" class="btn btn-primary">4</button>
        <button href="#" class="btn btn-primary">5</button>
    </div>
</div>
<!-- card template -->
<div class="container-fluid">
    @foreach($cocktails as $cocktail)
        @if ($loop->index % 4 and $loop->first > 0)
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3 py-2">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="//placehold.it/500x200" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{$cocktail -> name}}</h4>
                            <p class="card-text">{{$cocktail -> composition}}</p>
                            <a href="cocktail" class="btn btn-primary stretched-link">Détails</a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                @elseif ($loop->first)
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 py-2">
                            <div class="card h-100">
                                <img class="card-img-top img-fluid" src="//placehold.it/500x200" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{$cocktail -> name}}</h4>
                                    <p class="card-text">{{$cocktail -> composition}}</p>
                                    <a href="cocktail" class="btn btn-primary stretched-link">Détails</a>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                        @else
                            <div class="col-sm-6 col-lg-3 py-2">
                                <div class="card h-100">
                                    <img class="card-img-top img-fluid" src="//placehold.it/500x200"
                                         alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$cocktail -> name}}</h4>
                                        <p class="card-text">{{$cocktail -> composition}}</p>
                                        <a href="cocktail" class="btn btn-primary stretched-link">Détails</a>
                                    </div>
                                    <div class="card-footer">
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
</body>
@include('layout.footercocktail')
