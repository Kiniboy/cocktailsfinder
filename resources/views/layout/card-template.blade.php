<div class="col-sm-6 col-lg-3 py-2" style="margin: auto">
    <div class="card text-white bg-secondary h-100">
        <img class="card-img-top img-fluid" src="" alt="Cocktail image">
        <div class="card-body">
            <h4 class="card-title">{{$cocktail->name}}</h4>
            <p class="card-text">{{$cocktail->composition}}</p>
            <a href="cocktail/{{$cocktail->id}}" class="btn btn-primary">Détails</a>
        </div>
    </div>
</div>
