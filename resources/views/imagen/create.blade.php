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
        Comercio: <select name="comercio_id" id="">
            <option value="0">-- Seleccionar comercio_id --</option>
            @foreach($imagenList as $imagen)
                <option value="{{$imagen->comercio_id}}">{{$imagen->comercio->nombre}}</option>
            @endforeach
        </select><br>
        Lugar: <select name="lugar_id" id="">
            <option value="0">--Seleccionar un lugar--</option>
            @foreach($imagenList as $imagen)
                <option value="{{$imagen->lugar_id}}">{{$imagen->lugar->nombre}}</option>
            @endforeach
        </select> <br>
        <input type="submit">
        </form>

@endsection