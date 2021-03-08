@extends("layouts.main")

@section("librerias")
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script src="assets/js/carrusel.js"></script>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/carrusel.css">
@endsection


@section("content")
<section class="seccion1">
    <section class="b1">
        <div class="b1-slider">

            @foreach($comercioPrioridad as $comercio)
            <div class="b1-slide">
                <div class="b1-bg">
                    @foreach ($imagenList as $imagen)
                    @if($comercio->id == $imagen->comercio_id)

                    <img class="img-responsive w-100" style="height:100%;" src="/assets/imgs/comercio/{{$imagen->ruta}}" alt="{{$imagen->descripcion}}">
                    @break
                    @endif
                    @endforeach

                </div>
                <div class="wancho b1-cnt">
                    <figure class="b1-lanza-video">
                        <i class="icon-SVG-11"></i>
                    </figure>
                    <div class="b1-center">
                        <div class="b1-text">
                            <h2>
                                <strong>{{$comercio->nombre}}</strong>
                            </h2>
                        </div>
                        <a href="/comercio/public/{{$comercio->id}}" class="g-button">
                            <span>LEER MÁS</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </section>

    <h1 class="mt-5 text-center" id="titulo"><u>Mejores sitios para visitar en Almería</u></h1>

    <div class="container">
        <div class="row justify-content-center text-center">
            @foreach ($comercioList as $comercio)
            <div class="col-3 mx-4 my-5 border shadow rounded" onclick="mostrarComercio({{$comercio->id}})">
                @foreach ($imagenList as $imagen)
                @if($comercio->id == $imagen->comercio_id)
                <div class="imagen-cont">
                    <img class="zoom img-responsive w-100" src="/assets/imgs/comercio/{{$imagen->ruta}}" alt="{{$imagen->descripcion}}">
                </div>
                @break
                @endif
                @endforeach
                <h3 class="p-3">{{$comercio->nombre ?? ''}}</h3>
                <svg style="margin-bottom: 1rem;" fill="none" width="60" height="25" viewBox="0 0 35 10" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.83833 0L12.2482 5.45455L17.658 0L23.0678 5.45455L28.4777 0L34.775 6.34939L33 8.10987L28.4777 3.55017L23.0678 9.00472L17.658 3.55017L12.2482 9.00472L6.83833 3.55017L1.77503 8.65533L0 6.89485L6.83833 0Z" clip-rule="evenodd" fill="#0d6efd" fill-rule="evenodd"></path>
                </svg>
                <div class="descripcion p-3">{{$comercio->descripcion ?? ''}}</div>
                <div class="p-2"><svg style="margin-right: 0.6rem;" aria-hidden="true" width="25" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12 fa-3x">
                        <path fill="#0d6efd" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" class=""></path>
                    </svg>{{$comercio->ubicacion ?? ''}}</div>

                @foreach ($resenaList as $resena)
                @if($comercio->id == $resena->comercio_id)

                <div class="resena absolute-bottom p-3 mb-4" data-value="{{$resena->puntuacion}}"></div>
                @break
                @endif
                @endforeach
            </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-5">
        <hr>
        <h2 class="my-6 mt-5 text-center">Sitios que tienes que visitar en Almería</h2>
        <p class="text-center my-5">Una visita a la provincia de Almería ofrece todo lo necesario para unas vacaciones perfectas.
            Aventúrate en su escarpado paisaje para disfrutar de sus maravillas naturales,
            desenchufa en su larguísimas y sublimes playas y mézclate con los lugareños en la histórica ciudad de Almería.
        </p>
        <div class="row justify-content-center text-center">
            @foreach($lugarList as $lugar)
            <div class="col-5 p-0 m-3 mb-4 border">
                @foreach ($imagenList as $imagen)
                @if($lugar->id == $imagen->lugar_id)
                <img class="lugares img-responsive w-100" style="border-radius: initial;" src="/assets/imgs/lugares/{{$imagen->ruta}}" alt="{{$imagen->descripcion}}">
                @break
                @endif
                @endforeach
                <h3 class="p-3 pb-3"><strong>{{$lugar->nombre}}</strong></h3>
                <div class="p-3 pt-0">{{$lugar->descripcion}}</div>
            </div>
            @endforeach


        </div>
    </div>

</section>




<script>
    function mostrarComercio(id) {
        location.href = "/comercio/public/" + id;
    }
    $(document).ready(function() {

        function puntuacion(elemento, valor) {
            estrella = "<img style='width:1.4rem;' src='/assets/imgs/resena.svg'>";
            estrella_v = "<img style='width:1.4rem; opacity:0.4;' src='/assets/imgs/resena.svg'>";
            valorDecimal = valor;
            valor = Math.round(valor);
            switch (valor) {
                case 1:
                    $(elemento).html(estrella + estrella_v + estrella_v + estrella_v + estrella_v + "<div style='display: inline-block; margin-left: 1rem; font-size: 1.5rem;'>" + valorDecimal + "</div>");
                    break;
                case 2:
                    $(elemento).html(estrella + estrella + estrella_v + estrella_v + estrella_v + "<div style='display: inline-block; margin-left: 1rem; font-size: 1.5rem;'>" + valorDecimal + "</div>");
                    break;
                case 3:
                    $(elemento).html(estrella + estrella + estrella + estrella_v + estrella_v + "<div style='display: inline-block; margin-left: 1rem; font-size: 1.5rem;'>" + valorDecimal + "</div>");
                    break;
                case 4:
                    $(elemento).html(estrella + estrella + estrella + estrella + estrella_v + "<div style='display: inline-block; margin-left: 1rem; font-size: 1.5rem;'>" + valorDecimal + "</div>");
                    break;
                case 5:
                    $(elemento).html(estrella + estrella + estrella + estrella + estrella + "<div style='display: inline-block; margin-left: 1rem; font-size: 1.5rem;'>" + valorDecimal + "</div>");
                    break;
            }
        }

        $(".resena").each(function(index, e) {
            valor = $(this).data("value");
            puntuacion(this, valor);
        });

        function ellipsis_box(elemento, max_chars) {
            limite_text = $(elemento).text();
            if (limite_text.length > max_chars) {
                limite = limite_text.substr(0, max_chars) + "...";
                $(elemento).text(limite);
            }
            limite_text = "";
            limite = "";
        }

        $(".descripcion").each(function(index, e) {
            ellipsis_box(this, 130);
        });

        $(window).on('resize', function() {
            var win = $(this); //this = window
            if (win.width() <= 973) {
                $(".col-3").attr("class", "col-8 mx-4 my-5 border shadow rounded");
            } else
                $(".col-8").attr("class", "col-3 mx-4 my-5 border shadow rounded");
        });
    });

    /*
            $(document).ready(function() {
                $("#login").mouseenter(function() {
                    $(this).css("border-bottom", "5px solid black").animate({
                        'borderWidth': '4px',
                        'borderColor': 'black'
                    }, 500);
                });
                $("#login").mouseleave(function() {
                    $(this).animate({
                        'borderWidth': '0px',
                        'borderColor': 'black'
                    }, 500);
                })
            });*/
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
@endsection