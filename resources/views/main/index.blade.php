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


<h2 class="mt-5 text-center" id="titulo">Mejores sitios para visitar en Almería</h2>

<div class="container">
    <div class="row justify-content-center">
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
            <h3 class="p-2">{{$comercio->nombre ?? ''}}</h3>
            <div class="p-2"><img src="https://svgsilh.com/svg/1093169.svg" style="height:25px;width:25px;">{{$comercio->ubicacion ?? ''}}</div>
            <div class="descripcion p-3" onload="ellipsis_box(elemento, max_chars)">{{$comercio->descripcion ?? ''}}</div>

            @foreach ($resenaList as $resena)
            @if($comercio->id == $resena->comercio_id)
            <div name="resena" class="resena p-3" data-value="{{$resena->puntuacion}}"></div>
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
    <div class="row justify-content-center">
        @foreach($lugarList as $lugar)
        <div class="col-5 p-0 m-3 mb-4 border">
            @foreach ($imagenList as $imagen)
            @if($lugar->id == $imagen->lugar_id)
            <img class="lugares img-responsive w-100" style="border-radius: initial;" src="/assets/imgs/comercio/{{$imagen->ruta}}" alt="{{$imagen->descripcion}}">
            @break
            @endif
            @endforeach
            <h3 class="p-3 pb-0"><strong>{{$lugar->nombre}}</strong></h3>
            <div class="p-3 pt-0">{{$lugar->descripcion}}</div>
        </div>
        @endforeach


    </div>
</div>





<script>
    function mostrarComercio(id) {
        location.href = "/comercio/public/" + id;
    }
    $(document).ready(function() {

        $(".resena").each(function(indice, e) {
            valor = $(".resena").data("value");
            estrella = "<img style='height:25px;width:25px;' src='/assets/imgs/resena.svg'>";
            estrella_v = "<img style='height:25px;width:25px;opacity:0.4;' src='/assets/imgs/resena.svg'>"

            switch (valor) {
                case 1:
                    $(".resena").html(estrella + estrella_v + estrella_v + estrella_v + estrella_v + " 1/5");
                    break;
                case 2:
                    $(".resena").html(estrella + estrella + estrella_v + estrella_v + estrella_v + " 2/5");
                    break;
                case 3:
                    $(".resena").html(estrella + estrella + estrella + estrella_v + estrella_v) + " 3/5";
                    break;
                case 4:
                    $(".resena").html(estrella + estrella + estrella + estrella + estrella_v + " 4/5");
                    break;
                case 5:
                    $(".resena").html(estrella + estrella + estrella + estrella + estrella + " 5/5");
                    break;
            }
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