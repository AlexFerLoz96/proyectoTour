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
            @foreach($comercioList as $comercio)
            @isset($comercio->nombre)
                @if($comercio->id == $imagen->comercio->id)
                <option value="{{$imagen->comercio_id}}" selected style="background-color:rgb(230, 230, 230);">{{$imagen->comercio->nombre}}</option>
                @else
                <option value="{{$comercio->id}}">{{$comercio->nombre}}</option>
                @endif
            @endisset
            @endforeach
        </select><br>

        Lugar: <select name="lugar_id" id="">
            <option value="0">--Seleccionar un lugar--</option>
            @foreach($lugarList as $lugar)
            @isset($lugar->nombre)
                @if($lugar->id == $imagen->lugar_id)
                <option value="{{$imagen->lugar_id}}" selected style="background-color:rgb(230, 230, 230);">{{$imagen->lugar->nombre}}</option>
                @else
                <option value="{{$lugar->id}}">{{$lugar->nombre}}</option>
                @endif
            @endisset
            @endforeach
        </select> <br>
        <input type="submit">
        </form>

@endsection