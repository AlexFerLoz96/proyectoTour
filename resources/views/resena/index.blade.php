@extends("layouts.master")

@section("title", "resenas")

@section("header", "resenas")

@section("content")
    <a href="{{ route('resena.create') }}" class="btn btn-success">New</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th>Reseña</th>
                <th>Puntuación</th>
                <th>Fecha</th>
                <th>Usuario</th>
                <th>Comercio</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
    @foreach ($resenaList as $resena) 
        <tr>
            <td>{{$resena->id}}</td>
            <td>{{$resena->comentario}}</td>
            <td>{{$resena->puntuacion}}</td>
            <td>{{$resena->fecha}}</td>
            @foreach ($userList as $user)
                    @if($resena->user_id == $user->id)
            <td>{{$user->name}}</td>
                    @break
                    @endif
            @endforeach

            @foreach ($comercioList as $comercio)
                    @if($resena->comercio_id == $comercio->id)
            <td>{{$comercio->nombre}}</td>
                    @break
                    @endif
            @endforeach
            <td><a href="{{route('resena.edit', $resena->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action = "{{route('resena.destroy', $resena->id)}}" method="POST" id="delete{{$resena->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $resena->id }})" value="Delete" class="btn btn-danger">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection
<script>
    function question(id){
        if (confirm('¿Estas seguro de borrar esta reseña?')){
            document.getElementById("delete"+id).submit();
        }
    }
</script>