@extends("layouts.main")

@section("librerias")
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="/../../assets/css/public.css">
<link rel="stylesheet" href="/../../assets/css/carrusel.css">
<style>
  /*
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                align-content: center;
                height: 50%;
                max-width:50%;
                
            }       
            #tilt {
                z-index:2;
                width: 100%;
                height: 100%;

                transition: box-shadow 0.1s, transform 0.1s;

            
            }

            #tilt:hover {
            box-shadow: 0px 0px 30px rgba(0,0,0, 0.6);
            cursor: pointer;
            }
*/
</style>

@endsection

@section("content")

<div class="container mb-5">
  <div class="row d-inline">
    <h1 class="d-block">{{$comercio->nombre}}</h1>
  </div>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    @foreach ($imagenList as $imagen)
      <div class="carousel-item active">
        <img src="/assets/imgs/comercio/{{$imagen->ruta}}" class="d-block w-100 h-50" alt="...">
      </div>
      @break
    @endforeach
    @foreach ($imagenList as $imagen)
    <div class="carousel-item">
      <img src="/assets/imgs/comercio/{{$imagen->ruta}}" class="d-block w-100 h-50" alt="...">
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
  
  <h3 class="">{{$comercio->descripcion}}</h3>

  <h4 class="my-5">Otras sugerencias</h4>
  <div class="row">
    Aqui va un foreach con una lista de comercio(prioridad 1) que aparecerán en una sola row(col-3 o 2)
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>



@endsection