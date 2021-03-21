@extends("layouts.master")

@section("title", "Inserción de comercio")

@section("header", "Inserción de comercio")

@section("content")
    @isset($comercio)
        <form class="bg-light border p-4" action="{{ route('comercio.update', ['id' => $comercio->id]) }}" method="POST">
        @method("PUT")
    @else
        <form class="bg-light border p-4" action="{{ route('comercio.store') }}" method="POST">
    @endisset
        @csrf
        <h2>Nuevo comercio</h2>
        Nombre:<input class="form-control" type="text" name="nombre" value="{{$comercio->nombre ?? '' }}"><br>
        Orden:<input class="form-control" type="text" name="orden" value="{{$comercio->orden ?? '' }}"><br>
        Ubicacion: <input class="form-control" type="text" name="ubicacion" value="{{$comercio->ubicacion ?? '' }}"><br>
        Descripcion: <div class="form-group mb-4"><textarea rows=4 class="form-control mt-2 mb-4" type="text" name="descripcion" value="{{$comercio->descripcion ?? ''}}"></textarea></div><br>
        Prioridad: <input class="form-control" type="number" min="1" name="prioridad" value="{{$comercio->prioridad ?? ''}}"><br>
        Categoria: <select class="form-control" name="categoria_id" id="">
            <option >-- Seleccionar categoria --</option>
            @foreach($categoriaList as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @endforeach
        </select><br>
        <input  class="btn btn-success"type="submit">
        </form>

@endsection