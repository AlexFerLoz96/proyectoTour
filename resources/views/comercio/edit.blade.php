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
        <h2>Comercio {{$comercio->id}}</h2>
        Orden:<input type="text" name="orden" value="{{$comercio->orden ?? '' }}"><br>
        Nombre:<input type="text" name="nombre" value="{{$comercio->nombre ?? '' }}"><br>
        Ubicacion: <input type="text" name="ubicacion" value="{{$comercio->ubicacion ?? '' }}"><br>
        Descripcion: <textarea type="text" name="descripcion" value="{{$comercio->descripcion ?? '' }}">{{$comercio->descripcion ?? '' }}</textarea><br>
        Prioridad: <input type="number" min="1" name="prioridad" value="{{$comercio->prioridad ?? ''}}"><br>
        Categoria: <select name="categoria_id" id="">
            <option >-- Seleccionar categoria --</option>
            @foreach($categoriaList as $categoria)
                @if($comercio->categoria->id == $categoria->id)
                    <option value="{{$comercio->categoria->id}}" selected >{{$comercio->categoria->nombre}}</option>
                @else
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endif
            @endforeach
        </select><br>
        <input type="submit">
        </form>

@endsection