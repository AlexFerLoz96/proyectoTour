@extends("layouts.main")

@section("librerias")
<link rel="stylesheet" href="/../../assets/css/public.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


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

<div class="container">
  <div class="row d-inline">
    <h1 class="d-inline">{{$comercio->nombre}}</h1>
    <h3 class="d-inline">{{$comercio->descripcion}}</h3>
  </div>
  
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


@endsection