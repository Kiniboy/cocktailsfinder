@include('layout.header')
<body class="body_cocktails">
<!-- card template -->
    <div class="container-fluid">
        @foreach($cocktails as $cocktail)
            @if ($loop->first)
                <div class="row">
                @include('layout.card-template')
            @elseif ($loop->last)
                @include('layout.card-template')
                </div>
            @else
                @include('layout.card-template')
            @endif
        @endforeach
    </div>
</body>
@include('layout.footer')
