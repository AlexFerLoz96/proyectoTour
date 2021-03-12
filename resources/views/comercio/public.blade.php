@extends("layouts.main")

@section("librerias")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="/../../assets/css/public.css">

@endsection

@section("content")
<div class="seccion1">
<div style="display:none">{{$valor = $comercio->id}}</div>
<div class="container mb-5 p-0">
    <div class="row d-inline">
        <h1 class="d-block">{{$comercio->nombre}}</h1>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($imagenComercio as $imagen)
            <div class="carousel-item active w-100">
                <div class="w-100 h-100"
                    style="position:absolute;background-image:url('/assets/imgs/comercio/{{$imagen->ruta}}');background-position:center;background-size:100%;filter:blur(5px);background-repeat:no-repeat">
                </div>
                <img src="/assets/imgs/comercio/{{$imagen->ruta}}"
                    style="position:relative;z-index:2;left:50%;transform:translate(-50%);width:70%;"
                    class="d-block h-100" alt="...">
            </div>
            @break
            @endforeach
            @foreach ($imagenComercio as $imagen)
            @continue($loop->first)
            <div class="carousel-item w-100">
                <div class="w-100 h-100"
                    style="position:absolute;background-image:url('/assets/imgs/comercio/{{$imagen->ruta}}');background-position:center;background-size:100%;filter:blur(5px);background-repeat:no-repeat">
                </div>
                <img src="/assets/imgs/comercio/{{$imagen->ruta}}"
                    style="position:relative;z-index:2;left:50%;transform:translate(-50%);width:70%;"
                    class="d-block h-100" alt="...">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
    </div><br>
    <svg style="position:relative;left:50%;transform:translateX(-50%);margin-bottom: 1rem;" fill="none" width="60"
        height="25" viewBox="0 0 35 10" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M6.83833 0L12.2482 5.45455L17.658 0L23.0678 5.45455L28.4777 0L34.775 6.34939L33 8.10987L28.4777 3.55017L23.0678 9.00472L17.658 3.55017L12.2482 9.00472L6.83833 3.55017L1.77503 8.65533L0 6.89485L6.83833 0Z"
            clip-rule="evenodd" fill="#0d6efd" fill-rule="evenodd"></path>
    </svg>
    <h5 class="">{{$comercio->descripcion}}</h5>
    <hr>
    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
            marginwidth="0"
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q={{$comercio->ubicacion}}+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>
    <br>
    <svg style="position:relative;left:50%;transform:translateX(-50%);margin-bottom: 1rem;" fill="none" width="60"
        height="25" viewBox="0 0 35 10" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M6.83833 0L12.2482 5.45455L17.658 0L23.0678 5.45455L28.4777 0L34.775 6.34939L33 8.10987L28.4777 3.55017L23.0678 9.00472L17.658 3.55017L12.2482 9.00472L6.83833 3.55017L1.77503 8.65533L0 6.89485L6.83833 0Z"
            clip-rule="evenodd" fill="#0d6efd" fill-rule="evenodd"></path>
    </svg>
    <h4 class="text-center my-5">Otras sugerencias</h4>
    <div class="row mb-4">
        @foreach($comercioPrioridad as $comercio)
        <div class="col mx-1 p-0" onclick="mostrarComercio({{$comercio->id}})">
            @foreach ($imagenList as $imagen)
            @if($comercio->id == $imagen->comercio_id)
            <div class="imagen-cont">
                <img class="zoom img-responsive w-100" src="/assets/imgs/comercio/{{$imagen->ruta}}"
                    alt="{{$imagen->descripcion}}">
            </div>
            @break
            @endif
            @endforeach
            <h5 class="p-2">{{$comercio->nombre ?? ''}}</h5>
            <p class="descripcion p-2">{{$comercio->descripcion ?? ''}}</p>
        </div>
        @endforeach
    </div>
    <div class="row mb-4">
        <form action="{{ route('resena.store') }}" method="POST" class="bg-light border p-4">
            @csrf
            <label style="width: 100%;" for="exampleFormControlTextarea1">Escriba una opinión:</label>
            <input type="hidden" name="comercio_id" value="{{$valor}}">
            <div class="stars" id="stars">
                <input class="star star-5" id="star-5" type="radio" name="puntuacion" value="5" />
                <label class="star star-5" for="star-5"></label>
                <input class="star star-4" id="star-4" type="radio" name="puntuacion" value="4" />
                <label class="star star-4" for="star-4"></label>
                <input class="star star-3" id="star-3" type="radio" name="puntuacion" value="3" />
                <label class="star star-3" for="star-3"></label>
                <input class="star star-2" id="star-2" type="radio" name="puntuacion" value="2" />
                <label class="star star-2" for="star-2"></label>
                <input class="star star-1" id="star-1" type="radio" name="puntuacion" value="1" />
                <label class="star star-1" for="star-1"></label>
            </div>
            <div class="form-group mb-4">
                <textarea class="form-control my-2" name="comentario" placeholder="Escriba su comentario..."
                    id="exampleFormControlTextarea1" rows="4"></textarea>
                <button type="submit" class="btn btn-outline-success">Enviar</button>
            </div>

        </form>
    </div>

    <div class="row justify-content-center">
        <div class="col-9">
            @foreach($resenaMedia as $media)
            <h1 class="text-center">Comentarios y valoraciones</h1>
            <div class="comentarios col-8">{{$contador}} comentarios</div>
            <div class="containerMedia row border p-1 bg-light">
                <div class="resenaMedia col-8 p-3" data-value="{{$media->puntuacion}}"></div>
            </div>
            @endforeach

        </div>
        @foreach($resenaList as $resena)
        <div class="col-7 mx-1 p-0">
            <div>
                <div class="resena d-inline p-3 mb-4" data-value="{{$resena->puntuacion}}"></div>
                <div class="fecha d-inline">{{$resena->fecha}}</div>

                @foreach($usuarioNombre as $user)
                @if($user->id == $resena->user_id)
                <div class="usuario">
                    Realizada por: {{$user->name}}
                </div>
                @break
                @endif
                @endforeach
                <div class="comentario mb-4"><small>{{$resena->comentario}}</small></div>
            </div>
            <hr>
        </div>
        @endforeach

    </div>
</div>
<!--container mb-5 p-0-->

</div>
<script>
function mostrarComercio(id) {
    location.href = "/comercio/public/" + id;
}


$(document).ready(function() {

    function ellipsis_box(elemento, max_chars) {
        limite_text = $(elemento).text();
        if (limite_text.length > max_chars) {
            limite = limite_text.substr(0, max_chars) + " ...";
            $(elemento).text(limite);
        }
        limite_text = "";
        limite = "";
    }

    $(".descripcion").each(function(index, e) {
        ellipsis_box(this, 100);
    });

 
    function puntuacionMedia(elemento, valor) { //media de todas 
        estrella = "<img style='z-index:1000;width:20rem;' src='/assets/imgs/estrellas.png'>";
        estrella_v =
            "<div style='position:absolute;width:auto;top:50%;transform:translateY(-50%);padding:0;margin-left:8rem;'><img style='width:20rem; opacity:0.4;' src='/assets/imgs/estrellas.png'></div> ";
        $(elemento).html("<div class='row'>" + estrella_v +
            "<div class='col-12 p-0' style='position:absolute;top:50%;transform:translateY(-50%);margin-left:8rem;width:" + valor * 4 +
            "rem; overflow:hidden;'>" + estrella + "</div><div class='valor col-12'>" + valor + "</div>");
    }

    $(".resenaMedia").each(function(index, e) {
        valor = $(this).data("value");
        puntuacionMedia(this, valor);
    });

    function puntuacion(elemento, valor) { //cada una
        estrella = "<img style='width:1.4rem;' src='/assets/imgs/resena.svg'>";
        estrella_v = "<img style='width:1.4rem; opacity:0.4;' src='/assets/imgs/resena.svg'>";
        switch (valor) {
            case 1:
                $(elemento).html(estrella + estrella_v + estrella_v + estrella_v + estrella_v);
                break;
            case 2:
                $(elemento).html(estrella + estrella + estrella_v + estrella_v + estrella_v);
                break;
            case 3:
                $(elemento).html(estrella + estrella + estrella + estrella_v + estrella_v);
                break;
            case 4:
                $(elemento).html(estrella + estrella + estrella + estrella + estrella_v);
                break;
            case 5:
                $(elemento).html(estrella + estrella + estrella + estrella + estrella);
                break;
        }
    }

    $(".resena").each(function(index, e) {
        valor = $(this).data("value");
        puntuacion(this, valor);
    });

});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>



@endsection