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
        Puntuacion: <input type="number" min="1" max="5" name="puntuacion" value="{{$resena->puntuacion ?? ''}}"><br>
        Fecha: <input type="date" name="fecha" value="{{$resena->fecha ?? '' }}"> <br>
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
        </select><br>
        <input type="submit">
        </form>

@endsection