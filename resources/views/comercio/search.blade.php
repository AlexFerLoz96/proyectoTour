<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
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
                            <li><a class="dropdown-item" href="#">{{$categoria->nombre}}</a></li>
                        @endforeach
                        </ul>
                    </li>
                </ul>
                <form action="{{route('comercio.search')}}" class="d-flex ml-1" style="width: 40%;">
                {{ csrf_field() }}
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busqueda">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ms-auto p-2">
                    <li class="nav-item">
                        <a class="nav-link active" href="/login">Inicia sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="container">

        <h2>{{$palabraBusqueda}}</h2>
        <div class="row justify-content-center">
            @if(!@empty($consultaComercio))
            @foreach ($consultaComercio as $comercio)
            <div class="col-8 mb-5 border" onclick="mostrarComercio({{$comercio->id}})">
                <div class="p-2">{{$comercio->nombre ?? ''}}</div> <hr>
                <div class="p-2"><img src="https://svgsilh.com/svg/1093169.svg" style="height:25px;width:25px;">{{$comercio->ubicacion ?? ''}}</div>
                <div class="p-2">{{$comercio->descripcion ?? ''}}</div>
            </div>
            @endforeach
            @endif
        </div>
<!--
        <div class="row justify-content-center">
            @if(!empty($consultaCategoria))
            @foreach ($consultaCategoria ?? '' as $categoria)
            <div>{{$categoria->nombre}}</div>
            @endforeach
            @endif
        </div>-->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>



<!--<table id="navbar">
        <tr>
            <td><a id="titulo" href="/">Tour</a></td>
            <td><a class="" href="/user">Crud</a></td>
            <td><select>
                    <option>Categorías</option>
                    @foreach ($categoriaList ?? '' as $categoria)
                    <option value="{{$categoria->id ?? ''}}">{{$categoria->nombre ?? ''}}</option>
                    @endforeach
                </select>
            </td>
            <td class="search">
                <form action="{{route('comercio.search')}}">
                    {{ csrf_field() }}

                    <input type="search" class="input" name="busqueda">
                    <input type="submit" class="submit" value="Buscar">
                </form>
            </td>
            <td><a class="" href="/login">Inicia sesión</a></td>
        </tr>
    </table>-->