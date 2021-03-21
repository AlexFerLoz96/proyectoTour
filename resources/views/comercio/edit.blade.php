@extends("layouts.master")

@section("title", "Modificación de comercio")

@section("header", "Modificación de comercio")

@section("content")
    @isset($comercio)
        <form class="bg-light border p-4" action="{{ route('comercio.update', ['id' => $comercio->id]) }}" method="POST">
        @method("PUT")
    @else
        <form class="bg-light border p-4" action="{{ route('comercio.store') }}" method="POST">
    @endisset
        @csrf
        <h2>Comercio {{$comercio->id}}</h2>
        Orden:<input class="form-control" type="text" name="orden" value="{{$comercio->orden ?? '' }}"><br>
        Nombre:<input class="form-control" type="text" name="nombre" value="{{$comercio->nombre ?? '' }}"><br>
        Ubicación: <input class="form-control" type="text" name="ubicacion" value="{{$comercio->ubicacion ?? '' }}"><br>
        Descripción: <div class="form-group mb-4"><textarea rows=4 class="form-control mt-2 mb-4" type="text" name="descripcion" value="{{$comercio->descripcion ?? '' }}">{{$comercio->descripcion ?? '' }}</textarea></div><br>
        Prioridad: <input class="form-control" type="number" min="1" name="prioridad" value="{{$comercio->prioridad ?? ''}}"><br>
        Categoría: <select class="form-control" name="categoria_id" id="">
            <option >-- Seleccionar categoria --</option>
            @foreach($categoriaList as $categoria)
                @if($comercio->categoria->id == $categoria->id)
                    <option value="{{$comercio->categoria->id}}" selected >{{$comercio->categoria->nombre}}</option>
                @else
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endif
            @endforeach
        </select><br>
        <input class="btn btn-success" type="submit">
        </form>

@endsection