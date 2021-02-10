<html>

<head>
    <title>@yield('Titulo')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <nav id="navbar" class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Tour</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categoria/public">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/comercio">Comercios</a>
                </li>
                
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">    
                    <a class="nav-link" href="/login">Inicia sesión</a>
                </li>
            </ul>
            <!--
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            -->
        </div>
    </nav>

    <div id="intro-image" class="intro-image" style="background-image:url(https://cdn.getyourguide.com/img/location/5440ed46358e9.jpeg/88.jpg);">
        <h1 id="text-intro-image" style="position: absolute; z-index: 1;">Almería</h1>
        <div class="subtitulo-intro-image">Conoce nuestra ciudad</div>
    </div>

    <div id="container">
        <div class="row justify-content-center">
        @foreach ($comercioList as $comercio)
                <div class="col-5">
                    <div class="nombre">{{$comercio->nombre ?? ''}}</div>
                    <div class="ubicacion"><img src="https://svgsilh.com/svg/1093169.svg" style="height:25px;width:25px;">{{$comercio->ubicacion ?? ''}}</div>
                    <div class="descripcion">{{$comercio->descripcion ?? ''}}</div>
                </div>
        
        @endforeach 
        </div>
    </div>

</body>

</html>