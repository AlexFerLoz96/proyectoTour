@extends("layouts.master")

@section("title", "Modificación de modelo")

@section("header", "Modificación de modelo")

@section("content")
    @isset($modelo)
        <form action="{{ route('modelo.update', ['id' => $modelo->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('modelo.store') }}" method="POST">
    @endisset
        @csrf
        Modelo ruta:<input type="text" name="ruta" value="{{$modelo->ruta ?? '' }}"><br>
        Descripcion: <input type="text" name="descripcion" value="{{$modelo->descripcion ?? '' }}"> <br>
        <input type="submit">
        </form>

@endsection