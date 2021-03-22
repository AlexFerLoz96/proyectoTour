@extends("layouts.master")

@section("title", "Comercios")

@section("content")
    <!--<form class="form-inline float-right my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
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