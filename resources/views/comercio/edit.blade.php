@extends("layouts.master")

@section("title", "Modificación de comercio")

@section("header", "Modificación de comercio")

@section("content")
    @isset($comercio)
        <form action="{{ route('comercio.update', ['id' => $comercio->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('comercio.store') }}" method="POST">
    @endisset
        @csrf
        comercio nombre:<input type="text" name="nombre" value="{{$comercio->nombre ?? '' }}"><br>
        Ubicacion: <input type="text" name="ubicacion" value="{{$comercio->ubicacion ?? '' }}"><br>
        Descripcion: <input type="text" name="descripcion" value="{{$comercio->descripcion ?? '' }}"> <br>
        <input type="submit">
        </form>

@endsection