@extends("layouts.master")

@section("title", "Inserción de resena")

@section("header", "Inserción de resena")

@section("content")
    @isset($resena)
        <form action="{{ route('resena.update', ['id' => $resena->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('resena.store') }}" method="POST">
    @endisset
        @csrf
        resena comentario:<input type="text" name="comentario" value="{{$resena->comentario ?? '' }}"><br>
        Puntuacion: <input type="number" name="puntuacion" value="{{$resena->puntuacion ?? ''}}"><br>
        Fecha: <input type="date" name="fecha" value="{{$resena->fecha ?? '' }}"> <br>
        <input type="submit">
        </form>

@endsection