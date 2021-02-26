@extends("layouts.master")

@section("title", "Modificación de lugar")

@section("header", "Modificación de lugar")

@section("content")
    @isset($lugar)
        <form action="{{ route('lugar.update', ['id' => $lugar->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('lugar.store') }}" method="POST">
    @endisset
        @csrf
        lugar nombre:<input type="text" name="nombre" value="{{$lugar->nombre ?? '' }}"><br>
        Descripcion: <input type="text" name="descripcion" value="{{$lugar->descripcion ?? '' }}"> <br>
        <input type="submit">
        </form>

@endsection