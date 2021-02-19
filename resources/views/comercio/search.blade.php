<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>

<body>

    <table id="navbar">
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
    </table>

    <div id="container">
        <div class="row justify-content-center">
            @if(!@empty($consultaComercio))
            @foreach ($consultaComercio as $comercio)
            <div class="col-5" onclick="mostrarComercio({{$comercio->id}})">
                <div class="nombre">{{$comercio->nombre ?? ''}}</div>
                <div class="ubicacion"><img src="https://svgsilh.com/svg/1093169.svg" style="height:25px;width:25px;">{{$comercio->ubicacion ?? ''}}</div>
                <div class="descripcion">{{$comercio->descripcion ?? ''}}</div>
            </div>
            @endforeach
            @endif
        </div>

        <div class="row justify-content-center">
            @if(!empty($consultaCategoria))
            @foreach ($consultaCategoria ?? '' as $categoria)
            <div>{{$categoria->nombre}}</div>
            @endforeach
            @endif
        </div>
    </div>

</body>

</html>