@extends("layouts.master")

@section("title", "resenas")

@section("header", "resenas")

@section("content")
    <form action="{{route('resena.search')}}" class="d-flex my-2 ml-1 float-right" style="width: 40%;">
        {{ csrf_field() }}
            <input class="form-control me-2" required type="search" placeholder="¿Qué deseas buscar?" autocomplete="off" aria-label="Search" name="busqueda">
            <button class="btn btn-outline-primary" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
    </form>

    <a href="{{ route('resena.create') }}" class="btn btn-success">New</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"><a href="{{ route('resena.ordenar','id') }}">ID</a></th>
                <th>Reseña</th>
                <th><a href="{{ route('resena.ordenar','puntuacion') }}">Puntuación</a></th>
                <th><a href="{{ route('resena.ordenar','fecha') }}">Fecha</a></th>
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