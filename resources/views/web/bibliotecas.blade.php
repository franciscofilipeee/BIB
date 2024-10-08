@include('layouts.index')

<body>
    @include('layouts.nav')
    <h1>Lista de bibliotecas</h1>
    <div class="d-flex w-100" style="margin: 1rem;">
        @foreach ($bibliotecas as $biblioteca)
            <a href="{{ '/biblioteca/detalhes/' . $biblioteca->id }}">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $biblioteca->nome }}</h5>
                        <p class="card-text">{{ $biblioteca->cidade }}, {{ $biblioteca->estado }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    @include('layouts.footer')
</body>

</html>
