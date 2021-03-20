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
        <h2>Reseña {{$resena->id}}</h2>
        Comentario:<textarea rows="10" cols="50" name="comentario" value="{{$resena->comentario ?? '' }}">{{$resena->comentario ?? '' }}</textarea><br>
        Puntuacion: <input type="number" min="1" max="5" name="puntuacion" value="{{$resena->puntuacion ?? ''}}"><br>
        Usuario: <select name="user_id" id="">
            <option >-- Seleccionar usuario --</option>
            @foreach($userList as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select><br>
        Comercio: <select name="comercio_id" id="">
            <option >-- Seleccionar comercio_id --</option>
            @foreach($comercioList as $comercio)
                <option value="{{$comercio->id}}">{{$comercio->nombre}}</option>
            @endforeach
        </select><br><input type="submit">
        </form>

@endsection