@extends("layouts.master")

@section("title", "Comercios")

@section("content")
    
    
    <form action="{{route('comercio.adminsearch')}}" class="d-flex my-2 ml-1 float-right" style="width: 40%;">
    {{ csrf_field() }}
        <input class="form-control me-2" required type="search" placeholder="¿Qué deseas buscar?" autocomplete="off" aria-label="Search" name="busqueda">
        <button class="btn btn-outline-primary" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </button>
        </form>
    <a href="{{ route('comercio.create') }}" class="btn btn-success">New</a>
    <table class="table">
    <thead class="thead-dark">
            <tr>
                <th scope="col"><a href="{{ route('comercio.ordenar','id') }}">ID</a></th>
                <th><a href="{{ route('comercio.ordenar','orden') }}">Orden</a></th>
                <th><a href="{{ route('comercio.ordenar','nombre') }}">Comercios</a></th>
                <th>Ubicación</th>
                <th>Descripción</th>
                <th><a href="{{ route('comercio.ordenar','prioridad') }}">Prioridad</a></th>
                <th>Categoria</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

    @foreach ($comercioList as $comercio)
        <tr>
            <td>{{$comercio->id}}</td>
            <td>{{$comercio->orden}}</td>
            <td>{{$comercio->nombre}}</td>
            <td>{{$comercio->ubicacion}}</td>
            <td>{{$comercio->descripcion}}</td>
            <td>{{$comercio->prioridad}}</td>
            <td>{{$comercio->categoria->nombre}}</td>
            <td><a href="{{route('comercio.edit', $comercio->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action = "{{route('comercio.destroy', $comercio->id)}}" method="POST" id="delete{{$comercio->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $comercio->id }})" value="Delete" class="btn btn-danger">
                </form> 
            </td>
    @endforeach
    </table>
    </div>
@endsection
<script>
    function question(id){
        if (confirm('¿Estas seguro de borrar este comercio?')){
            document.getElementById("delete"+id).submit();
        }
    }
</script>