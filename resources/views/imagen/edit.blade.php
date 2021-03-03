@extends("layouts.master")

@section("title", "Modificación de imagen")

@section("header", "Modificación de imagen")

@section("content")
    @isset($imagen)
        <form action="{{ route('imagen.update', ['id' => $imagen->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('imagen.store') }}" method="POST">
    @endisset
        @csrf
        <h2>Imagen {{$imagen->id}}</h2>
        Ruta:<input type="text" name="ruta" value="{{$imagen->ruta ?? '' }}"><br>
        Descripcion: <input type="text" name="descripcion" value="{{$imagen->descripcion ?? ''}}"><br>
        
        Comercio: <select name="comercio_id" id="">
            <option value="0">--Seleccionar un comercio--</option>
            @foreach($imagenList as $comercio)
            @isset($comercio->comercio->nombre)
                @if($imagen->comercio_id == $comercio->comercio->id)
                <option value="{{$imagen->comercio_id}}" selected >{{$imagen->comercio->nombre}}</option>
                @else
                <option value="{{$comercio->comercio->id}}">{{$comercio->comercio->nombre}}</option>
                @endif
            @endisset
            @endforeach
        </select><br>

        Lugar: <select name="lugar_id" id="">
            <option value="0">--Seleccionar un lugar--</option>
            @foreach($imagenList as $lugar)
            @isset($lugar->lugar->nombre)
                <option value="{{$lugar->lugar_id}}">{{$lugar->lugar->nombre}}</option>
            @endisset
            @endforeach
        </select> <br>
        <input type="submit">
        </form>

@endsection