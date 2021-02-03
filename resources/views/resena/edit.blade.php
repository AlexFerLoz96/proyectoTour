@extends("layouts.master")

@section("title", "Modificación de resena")

@section("header", "Modificación de resena")

@section("content")
    @isset($resena)
        <form action="{{ route('resena.update', ['id' => $resena->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('resena.store') }}" method="POST">
    @endisset
        @csrf
        resena ruta:<input type="text" name="comentario" value="{{$resena->comentario ?? '' }}"><br>
        Puntuacion: <input type="text" name="puntuacion" value="{{$resena->puntuacion ?? '' }}"> <br>
        Fecha: <input type="date" name="fecha" value="{{$resena->fecha ?? '' }}"> <br>
        <input type="submit">
        </form>

@endsection