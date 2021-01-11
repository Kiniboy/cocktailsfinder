<div class="col-sm-6 col-lg-3 py-2">
    <div class="card h-100">
        <img class="card-img-top img-fluid" src="//placehold.it/500x200" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">{{$cocktail->name}}</h4>
            <p class="card-text">{{$cocktail->composition}}</p>
            <a href="cocktail/{{$cocktail->id}}" class="btn btn-primary stretched-link">Détails</a>
        </div>
        <div class="card-footer">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div>
