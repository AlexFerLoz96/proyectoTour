@extends("layouts.master")

@section("title", "Inserción de resena")

@section("header", "Inserción de resena")

@section("content")
    @isset($resena)
        <form class="bg-light border p-4" action="{{ route('resena.update', ['id' => $resena->id]) }}" method="POST">
        @method("PUT")
    @else
        <form class="bg-light border p-4" action="{{ route('resena.store') }}" method="POST">
    @endisset
        @csrf
        <h2>Nueva reseña</h2>
        Comentario:<div class="form-group mb-4"><textarea rows=4 class="form-control mt-2 mb-4" name="comentario" value="{{$resena->comentario ?? '' }}">{{$resena->comentario ?? '' }}</textarea></div><br>
        Puntuacion: <input class="form-control" type="number" min="1" max="5" name="puntuacion" value="{{$resena->puntuacion ?? ''}}"><br>
        Usuario: <select class="form-control" name="user_id" id="">
            <option >-- Seleccionar usuario --</option>
            @foreach($userList as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select><br>
        Comercio: <select class="form-control" name="comercio_id" id="">
            <option >-- Seleccionar comercio_id --</option>
            @foreach($comercioList as $comercio)
                <option value="{{$comercio->id}}">{{$comercio->nombre}}</option>
            @endforeach
        </select><br>
        <input class="btn btn-success" type="submit">
        </form>

@endsection