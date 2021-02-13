@include('layout.header')
<body>
    <div class="container pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h2 style="color: #56257E">L'ENTREPRISE</h2>
        <hr class="my-4">
        <img id="society" src="{{URL::asset('/images/paper-3213924_1920.jpg')}}" alt="">
        <div class="jumbotron" style="color: #1b1e21 !important;">
            <h1 class="display-4" style="color: #1b1e21 !important;">A PROPOS</h1>
            <p class="lead">Qui sommes nous ?</p>
            <hr class="my-4">
            <p> Désireux de vouloir toujours satisfaire les amateur de cocktails, nous avons eu <br> une idée : un site de notations
                de cocktails. Il pourrait a la fois réunir les bars locaux <br> et les personnes en cherche perpétuelle de nouveaux
                cocktails</p>
        </div>
        <h2 style="color: #56257E">LES COLLABORATEURS</h2>
        <hr class="my-4">
        <img id="team" src="{{URL::asset('/images/equipe00.PNG')}}" alt="">
    </div>

</body>
@include('layout.footer')
