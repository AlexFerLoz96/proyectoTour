@extends("layouts.master")

@section("title", "Inserción de categoria")

@section("header", "Inserción de categoria")

@section("content")
    @isset($categoria)
        <form action="{{ route('categoria.update', ['id' => $categoria->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('categoria.store') }}" method="POST">
    @endisset
        @csrf
        Categoria name:<input type="text" name="nombre" value="{{$categoria->nombre ?? '' }}"><br>
        <input type="submit">
        </form>

@endsection