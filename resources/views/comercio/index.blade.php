@extends("layouts.master")

@section("title", "Comercios")

@section("header", "Comercios")

@section("content")
    <a href="{{ route('comercio.create') }}" class="btn btn-success">New</a>
    <table class="table">
    <thead class="thead-dark">
            <tr>
                <th scope="col">Comercios</th>
                <th scope="col">Ubicación</th>
                <th>Descripción</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

    @foreach ($comercioList as $comercio)
        <tr>
            <td>{{$comercio->nombre}}</td>
            <td>{{$comercio->ubicacion}}</td>
            <td>{{$comercio->descripcion}}</td>
            <td><a href="{{route('comercio.edit', $comercio->id)}}" class="btn btn-info">Edit</a></td>
            <td>
                <form action = "{{route('comercio.destroy', $comercio->id)}}" method="POST" id="delete{{$comercio->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $comercio->id }})" value="Delete" class="btn btn-danger">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection
<script>
    function question(id){
        if (confirm('¿Estas seguro de borrar este comercio?')){
            document.getElementById("delete"+id).submit();
        }
    }
</script>