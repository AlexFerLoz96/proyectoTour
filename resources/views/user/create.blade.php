@extends("layouts.master")

@section("title", "Inserción de usuario")

@section("header", "Inserción de usuario")

@section("content")
    @isset($user)
        <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('user.store') }}" method="POST">
    @endisset
        @csrf
        User name:<input type="text" name="name" value="{{$user->name ?? '' }}"><br>
        Email:<input type="text" name="email" value="{{$user->email ?? '' }}"><br>
        Password:<input type="password" name="password" value="{{$user->password ?? '' }}"><br>
        <input type="submit">
        </form>

@endsection