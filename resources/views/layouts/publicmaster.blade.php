<html>

<head>
    <title>@yield('Titulo')</title>
    @yield('librerias')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid mx-5">
            <a class="navbar-brand" href="/">Tour Almería</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-3" id="navbarScroll">
                <ul class="navbar-nav me-auto  my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px; margin-right: 5% !important;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/user">CRUD</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            @foreach ($categoriaList as $categoria)
                            <li><a class="dropdown-item" href="/categoria">{{$categoria->nombre}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <form action="{{route('comercio.search')}}" class="d-flex my-2 ml-1" style="width: 40%;">
                    {{ csrf_field() }}
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busqueda">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ms-auto p-2">
                    <li class="nav-item">
                        <a class="nav-link active" id="login" href="/login">Inicia sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
                    @yield('carrusel')
                    @yield('content')
    </body>

</html>
