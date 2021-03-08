@extends("layouts.main")

@section("librerias")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="/../../assets/css/public.css">

@endsection

@section("content")

<div class="container mb-5 p-0">
  <div class="row d-inline">
    <h1 class="d-block">{{$comercio->nombre}}</h1>
  </div>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach ($imagenComercio as $imagen)
      <div class="carousel-item active w-100">
        <div class="w-100 h-100" style="position:absolute;background-image:url('/assets/imgs/comercio/{{$imagen->ruta}}');background-position:center;background-size:100%;filter:blur(5px);background-repeat:no-repeat"></div>
        <img src="/assets/imgs/comercio/{{$imagen->ruta}}" style="position:relative;z-index:2;left:50%;transform:translate(-50%);width:70%;" class="d-block h-100" alt="...">
      </div>
      @break
      @endforeach
      @foreach ($imagenComercio as $imagen)
      @continue($loop->first)
      <div class="carousel-item w-100">
        <div class="w-100 h-100" style="position:absolute;background-image:url('/assets/imgs/comercio/{{$imagen->ruta}}');background-position:center;background-size:100%;filter:blur(5px);background-repeat:no-repeat"></div>
        <img src="/assets/imgs/comercio/{{$imagen->ruta}}" style="position:relative;z-index:2;left:50%;transform:translate(-50%);width:70%;" class="d-block h-100" alt="...">
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <h5 class="">{{$comercio->descripcion}}</h5>

  <h4 class="text-center my-5">Otras sugerencias</h4>
  <div class="row">
    @foreach($comercioPrioridad as $comercio)
    <div class="col border mx-1 p-0" onclick="mostrarComercio({{$comercio->id}})">
      @foreach ($imagenList as $imagen)
      @if($comercio->id == $imagen->comercio_id)
      <div class="imagen-cont">
        <img class="zoom img-responsive w-100" src="/assets/imgs/comercio/{{$imagen->ruta}}" alt="{{$imagen->descripcion}}">
      </div>
      @break
      @endif
      @endforeach
      <h5 class="p-2">{{$comercio->nombre ?? ''}}</h5>
      <p class="descripcion p-2">{{$comercio->descripcion ?? ''}}</p>
    </div>
    @endforeach
  </div>

  <form action="{{ route('resena.store') }}" method="POST" class="border p-4">
  @csrf
  <label style="width: 100%;" for="exampleFormControlTextarea1">Escriba una opinión:</label>
    <input type="hidden" name="comercio_id" value="{{$comercio->id}}">
    <div class="stars" id="stars" >
      <input class="star star-5" id="star-5" type="radio" name="puntuacion" value="5"/>
      <label class="star star-5" for="star-5"></label>
      <input class="star star-4" id="star-4" type="radio" name="puntuacion" value="4"/>
      <label class="star star-4" for="star-4"></label>
      <input class="star star-3" id="star-3" type="radio" name="puntuacion" value="3"/>
      <label class="star star-3" for="star-3"></label>
      <input class="star star-2" id="star-2" type="radio" name="puntuacion" value="2"/>
      <label class="star star-2" for="star-2"></label>
      <input class="star star-1" id="star-1" type="radio" name="puntuacion" value="1"/>
      <label class="star star-1" for="star-1"></label>
    </div>
    <div class="form-group mb-4">
      <textarea class="form-control my-2" name="comentario" placeholder="Escriba su comentario..." id="exampleFormControlTextarea1" rows="4"></textarea>
      <button type="submit" class="btn btn-outline-success">Success</button>
    </div>

  </form>
</div>


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

  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>



@endsection