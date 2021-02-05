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
        Descripcion: <input type="text" name="descripcion" value="{{$imagen->descripcion ?? '' }}"> <br>
        <input type="submit">
        </form>

@endsection