@include('layout.header')
<body class="bodyWithBackground">
<!-- card template -->
    <div class="container-fluid">
        @foreach($cocktails as $cocktail)
            @if ($loop->index % 4 and $loop->first > 0)
                </div>
                <div class="row">
                @include('layout.card-template')
            @elseif ($loop->first)
                <div class="row">
                @include('layout.card-template')
            @else
                @include('layout.card-template')
            @endif
        @endforeach
    </div>
</body>
@include('layout.footer')
