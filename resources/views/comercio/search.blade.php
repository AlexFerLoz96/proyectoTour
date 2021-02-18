<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if (is_array($consulta ?? '') || is_object($consulta ?? ''))
        @foreach ($consulta ?? '' ?? '' as $comercio)
            <tr>
                <td>{{$comercio->id}}</td>
                <td>{{$comercio->nombre}}</td>
                <td>{{$comercio->ubicacion}}</td>
                <td>{{$comercio->descripcion}}</td>
            </tr>
            <br>
        @endforeach
    @endif

    
</body>
</html>l