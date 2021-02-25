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
        imagen ruta:<input type="text" name="ruta" value="{{$imagen->ruta ?? '' }}"><br>
        Descripcion: <input type="text" name="descripcion" value="{{$imagen->descripcion ?? ''}}"><br>
        Comercio: <select name="comercio_id" id="">
            <option >-- Seleccionar comercio_id --</option>
            @foreach($comercioList as $comercio)
                <option value="{{$comercio->id}}">{{$comercio->nombre}}</option>
            @endforeach
        </select><br>
        <input type="submit">
        </form>

@endsection