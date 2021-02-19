<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        @if(!@empty($consultaComercio))
            @foreach ($consultaComercio ?? '' as $comercio)
            <tr>
                <td>{{$comercio->id}}</td>
                <td>{{$comercio->nombre}}</td>
                <td>{{$comercio->ubicacion}}</td>
                <td>{{$comercio->descripcion}}</td>
            </tr>
            <br>
            @endforeach
        @endif
        

        @if(!empty($consultaCategoria))
            @foreach ($consultaCategoria ?? '' as $categoria)
            <tr>
                <td>{{$categoria->nombre}}</td>
            </tr>
            @endforeach
        @endif
    </table>

</body>

</html>