@extends("layouts.master")

@section("title", "Inserción de imagen")

@section("header", "Inserción de imagen")

@section("content")
    @isset($imagen)
        <form action="{{ route('imagen.update', ['id' => $imagen->id]) }}" enctype="multipart/form-data" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('imagen.store') }}" enctype="multipart/form-data" method="POST">
    @endisset
        @csrf
        imagen ruta:<input type="file" multiple name="ruta[]" value="{{$imagen->ruta ?? '' }}"><br>
        Descripcion: <input type="text" name="descripcion" value="{{$imagen->descripcion ?? ''}}"><br>

        @isset($comercioList)
            Comercio: <select name="comercio_id">
            <option value="0">-- Seleccionar comercio_id --</option>
            @foreach($comercioList as $comercio)
                <option value="{{$comercio->id}}">{{$comercio->nombre}}</option>
            @endforeach
            </select><br>
        @endisset
        
        @isset($lugarList)
            Lugar: <select name="lugar_id">
            <option value="0">--Seleccionar un lugar--</option>
            @foreach($lugarList as $lugar)
                <option value="{{$lugar->id}}">{{$lugar->nombre}}</option>
            @endforeach
            </select> <br>
        @endisset
        <input type="submit">
        </form>

@endsection