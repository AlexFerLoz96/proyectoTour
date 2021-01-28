@extends("layouts.master")

@section("title", "Users")

@section("header", "Users")

@section("content")
    <a href="{{ route('user.create') }}">New</a>
    <table border='1'>
    @foreach ($userList as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td><a href="{{route('user.edit', $user->id)}}">Edit</a></td>
            <td>
                <form action = "{{route('user.destroy', $user->id)}}" method="POST" id="delete{{$user->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{$user->id}})" value="Delete">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection
<script>
    function question(id){
        if (confirm('¿Estas seguro de borrar esta película?')){
            document.getElementById("delete"+id).submit();
        }
    }
</script>