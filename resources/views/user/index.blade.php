@extends("layouts.master")

@section("title", "Users")

@section("header", "Users")

@section("content")
    <a href="{{ route('user.create') }}" class="btn btn-success">New</a>
    <table class="table">
    <thead class="thead-dark">
            <tr>
                <th  scope="col">ID</th>
                <th>Usuarios</th>
                <th>Nombre</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
    @foreach ($userList as $user) 
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->email}}</td>
            <td><a href="{{route('user.edit', $user->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action = "{{route('user.destroy', $user->id)}}" method="POST" id="delete{{$user->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $user->id }})" value="Delete" class="btn btn-danger">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection
<script>
    function question(id){
        if (confirm('¿Estas seguro de borrar este usuario?')){
            document.getElementById("delete"+id).submit();
        }
    }
</script>