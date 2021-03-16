@extends("layouts.main")

@section("librerias")
    <link rel="stylesheet" href="../assets/css/search.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
@endsection
@section("content")
<div class="seccion1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col mb-2">
                <p class="fs-2 d-inline">{{$palabraBusqueda}} </p>
                <p class="fs-6 d-inline">{{$contador}} 
                @if($contador == 1)
                    resultado encontrado
                
                @else
                    resultados encontrados
                
                @endif
                
                
                </p>
            </div>
        </div>
        
            @if(!@empty($consultaComercio))
                @foreach ($consultaComercio as $comercio)
                    <div class="row justify-content-center mb-5 border shadow rounded" onclick="mostrarComercio({{$comercio->id}})">
                        <div class="col-4 p-0">
                                @foreach ($imagenList as $imagen)
                                    @if($comercio->id == $imagen->comercio_id)
                                        <div class="imagen-cont"><img class="zoom rounded p-0 w-100 h-100" src="/assets/imgs/comercio/{{$imagen->ruta}}" alt="{{$imagen->descripcion}}"></div>
                                        @break
                                    @endif
                                @endforeach
                        </div>
                        <div class="col-8">
                            <div class="d-block p-2"><h3>{{$comercio->nombre ?? ''}}</h3></div>
                            <div class="d-block p-2"><svg style="margin-right: 0.6rem;" aria-hidden="true" width="25" focusable="false"
            data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12 fa-3x">
            <path fill="#0d6efd"
                d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"
                class=""></path>
        </svg>{{$comercio->ubicacion ?? ''}}</div>
                            <div class="d-block p-2">{{$comercio->descripcion ?? ''}}</div>
                        </div>
                    </div>
                @endforeach
            @endif
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script>
        function mostrarComercio(id) {
            location.href = "/comercio/public/" + id;
        }
    </script>
@endsection