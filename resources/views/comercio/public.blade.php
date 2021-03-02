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
<script src="/../../assets/js/carrusel.js"></script>
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

<div class="container" id="carrusel">
  <div class="row d-inline">
    <h1 class="d-inline">{{$comercio->nombre}}</h1>
    <h3 class="d-inline">{{$comercio->descripcion}}</h3>
  </div>
  
  <section class="b1">
    <div class="b1-slider">
    @foreach ($imagenList as $imagen)
      <div class="b1-slide">
        <div class="b1-bg">
            <img class="img-responsive w-100" style="height:100%;" src="/assets/imgs/comercio/{{$imagen->ruta}}" alt="{{$imagen->descripcion}}">
        
        </div>
                <div class="wancho b1-cnt">
                <figure class="b1-lanza-video">
                    <i class="icon-SVG-11"></i>
                </figure>
          </div>
        </div>
        @endforeach
      </div>      
    </div>
  </section>
</div>

@endsection