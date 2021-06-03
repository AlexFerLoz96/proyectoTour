<html>
<head>
    <title>@yield('Titulo')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
    <body>
            @section('nav') 
                <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                
                    <a class="navbar-brand" href="/">Tour</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/user">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/categoria">Categorías</a>
                            </li><li class="nav-item">
                                <a class="nav-link" href="/comercio">Comercios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/imagen">Imagenes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/resena">Reseñas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/lugar">Lugares</a>
                            </li>
                            <!--
                            <li class="nav-item">
                                <a class="nav-link" href="/opcion">Opciones</a>
                            </li>-->
                            <li class="nav-item">
                                <a class="nav-link" href="/modelo">Modelos 3D</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            @show
                    <div class="container">
                    @yield('content')
    </body>
</html>