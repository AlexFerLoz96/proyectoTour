@extends("layouts.master")

@section("title", "Modificación de resena")

@section("header", "Modificación de resena")

@section("content")
    @isset($resena)
        <form class="bg-light border p-4" action="{{ route('resena.update', ['id' => $resena->id]) }}" method="POST">
        @method("PUT")
    @else
        <form class="bg-light border p-4" action="{{ route('resena.store') }}" method="POST">
    @endisset
        @csrf
        <h2>Reseña {{$resena->id}}</h2>
        Comentario:<div class="form-group mb-4"><textarea rows=4 class="form-control mt-2 mb-4" name="comentario" value="{{$resena->comentario ?? '' }}">{{$resena->comentario ?? '' }}</textarea></div><br>
        Puntuacion: <input class="form-control" type="number" min="1" max="5" name="puntuacion" value="{{$resena->puntuacion ?? ''}}"><br>
        Usuario: <select class="form-control" name="user_id" id="">
            <option >-- Seleccionar usuario --</option>
            @foreach($userList as $user)
            @if($resena->user->id == $user->id)
            <option value="{{$resena->user->id}}" selected >{{$resena->user->name}}</option>
            @else
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endif
            @endforeach
        </select><br>
        Comercio: <select class="form-control" name="comercio_id" id="">
            <option >-- Seleccionar comercio_id --</option>
            @foreach($comercioList as $comercio)
            @if($resena->comercio->id == $comercio->id)
            <option value="{{$resena->comercio->id}}" selected >{{$resena->comercio->nombre}}</option>
            @else
                <option value="{{$comercio->id}}">{{$comercio->nombre}}</option>
            @endif
            @endforeach
        </select><br><input class="btn btn-success" type="submit">
        </form>

@endsection