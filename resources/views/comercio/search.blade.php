@extends("layouts.main")

@section("librerias")
    <link rel="stylesheet" href="../assets/css/search.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
@endsection
@section("content")
    <div class="container mx-5">
        <div class="row justify-content-center">
            <div class="col mb-2">
                <p class="fs-2 d-inline">{{$palabraBusqueda}} </p>
                <p class="fs-6 d-inline">{{$contador}} resultados encontrados</p>
            </div>
        </div>
        
            @if(!@empty($consultaComercio))
                @foreach ($consultaComercio as $comercio)
                    <div class="row mb-5 border shadow rounded" onclick="mostrarComercio({{$comercio->id}})">
                        <div class="col-4 p-0">
                                @foreach ($imagenList as $imagen)
                                    @if($comercio->id == $imagen->comercio_id)
                                        <img class="rounded p-0 w-100 h-100" src="/assets/imgs/comercio/{{$imagen->ruta}}" alt="{{$imagen->descripcion}}">
                                        @break
                                    @endif
                                @endforeach
                        </div>
                        <div class="col-8">
                            <div class="d-block p-2"><h3>{{$comercio->nombre ?? ''}}</h3></div>
                            <div class="d-block p-2"><img src="https://svgsilh.com/svg/1093169.svg" style="height:25px;width:25px;">{{$comercio->ubicacion ?? ''}}</div>
                            <div class="d-block p-2">{{$comercio->descripcion ?? ''}}</div>
                        </div>
                    </div>
                @endforeach
            @endif
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script>
        function mostrarComercio(id) {
            location.href = "/comercio/public/" + id;
        }
    </script>
@endsection