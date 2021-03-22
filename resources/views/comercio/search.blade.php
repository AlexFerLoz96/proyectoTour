@extends("layouts.main")

@section("librerias")
<link rel="stylesheet" href="../assets/css/search.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
@endsection
@section("content")
<div class="seccion1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col mb-2">
<!------------------------------------------- Número de resultado de la búsqueda ---------------------------------------------->
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
<!-------------------------------------------Bucles para los comercios e imagenes------------------------------------------------->
        @if(!@empty($consultaComercio))
        @foreach ($consultaComercio as $comercio)
        <div class="row justify-content-center mb-5 border shadow rounded" onclick="mostrarComercio({{$comercio->id}})">
            <div class="col-4 p-0">
                @foreach ($imagenList as $imagen)
                @if($comercio->id == $imagen->comercio_id)
                <div class="imagen-cont"><img class="zoom img-responsive p-0 w-100 h-100" src="/assets/imgs/comercio/{{$imagen->ruta}}" alt="{{$imagen->descripcion}}"></div>
                @break
                @endif
                @endforeach
            </div>
            <div class="col-8">
                <div class="d-block p-2">
                    <h3>{{$comercio->nombre ?? ''}}</h3>
                </div>
                <div class="d-block p-2"><svg style="margin-right: 0.6rem;" aria-hidden="true" width="25" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12 fa-3x">
                        <path fill="#0d6efd" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" class=""></path>
                    </svg>{{$comercio->ubicacion ?? ''}}</div>
                <div class="descripcion d-block p-2">
                    <h6>{!!$comercio->descripcion ?? '' !!}</h6>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        <div id="mostrarDatos" class="row justify-content-center"></div>
        <div class="text-center"><button class="btn btn-outline-primary w-25 mb-5" type="button" id="cargarDatos">Cargar más</button></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script>
    
    function mostrarComercio(id) {//funcion para mostrar cada comercio
        location.href = "/comercio/public/" + id;
    }
    /************************* LIMITACION DE CARACTERES *********************************/
    function limitarCaracteres(elemento, max_chars) {
        limite_text = $(elemento).text();
        if (limite_text.length > max_chars) {
            limite = limite_text.substr(0, max_chars) + "...";
            $(elemento).text(limite);
        }
        limite_text = "";
        limite = "";
    }

    $(document).ready(function() {
        
        $(".descripcion").each(function(index, e) {
            limitarCaracteres(this, 350);
        });
        /****************************** RESPONSIVIDAD ***************************************/
        $(window).resize(function(){
            if($(window).width() < 1000){
                $(".col-4").css("display", "none");
                $(".col-8").attr("class", "col-12")
            }else{
                $(".col-4").css("display", "block");
                $(".col-12").attr("class", "col-8");
            }
        });

        if($(window).width() < 1000){
            $(".col-8").attr("class", "col-12")
        }else{
            $(".col-12").attr("class", "col-8");
        }


        /****************************** CONSULTA AJAX SEARCH *********************************/

        var skip = 10;
        var key = "{{$palabraBusqueda}}";

        if(skip >= {{$contador}}){
                $("#cargarDatos").hide(0);
        }

        $("#cargarDatos").click(function() {

            $.ajax({
                url: "/cargarDatosSearch/" + key + "/" + skip,
                method: 'GET',
                dataType: 'JSON',

                success: function(datos) {
                    var mostrar = "";
                    for (var i = 0; i < Object.keys(datos.comercio).length; i++) {
                        mostrar += "<div class='row justify-content-center mb-5 p-0 border shadow rounded' onclick='mostrarComercio(" + datos.comercio[i].id + ")'> <div class='col-4 p-0'>";
                        for (var j = 0; j < Object.keys(datos.imgs).length; j++) {
                            if (datos.comercio[i].id == datos.imgs[j].comercio_id) {
                                mostrar += "<div class='imagen-cont'><img class='zoom img-responsive p-0 w-100 h-100' src='/assets/imgs/comercio/" + datos.imgs[j].ruta + "'alt='" + datos.imgs[j].descripcion + "'></div>";
                                break;
                            }
                        }
                        mostrar += "</div>";
                        mostrar += "<div class='col-8'><div class='d-block p-2'>";
                        mostrar += "<h3 class='nombre'>" + datos.comercio[i].nombre + "</h3></div>";
                        mostrar += "<div class='d-block p-2'><svg style='margin-right: 0.6rem;' aria-hidden='true' width='25' focusable='false' data-prefix='fas' data-icon='map-marker-alt' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512' class='svg-inline--fa fa-map-marker-alt fa-w-12 fa-3x'><path fill='#0d6efd' d='M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z'></path></svg>";
                        mostrar += datos.comercio[i].ubicacion + "</div>";
                        mostrar += "<div class='descripcion d-block p-2'>";
                        mostrar += datos.comercio[i].descripcion + "</div></div>";
                        mostrar += "</div>";
                    }
                    $("#mostrarDatos").append(mostrar);
                },

                complete: function() {
                    $(".descripcion").each(function(index, e) {
                        limitarCaracteres(this, 300);
                    });
                }
            });

            skip += 10;
            if(skip >= {{$contador}}){
                        $("#cargarDatos").hide(500);
            }
        });
       
    });
</script>
@endsection