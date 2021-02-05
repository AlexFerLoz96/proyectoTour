@extends("layouts.master")

@section("title", "modelo")

@section("header", "modelo")

@section("content")
    <a href="{{ route('modelo.create') }}" class="btn btn-success">New</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th>Modelo</th>
                <th>Ruta</th>
                <th>Descripcion</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
    @foreach ($modeloList as $modelo) 
        <tr>
            <td>{{$modelo->id}}</td>
            <td>{{$modelo->ruta}}</td>
            <td>{{$modelo->descripcion}}</td>
            <td><a href="{{route('modelo.edit', $modelo->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action = "{{route('modelo.destroy', $modelo->id)}}" method="POST" id="delete{{$modelo->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $modelo->id }})" value="Delete" class="btn btn-danger">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection
<script>
    function question(id){
        if (confirm('¿Estas seguro de borrar este modelo 3D?')){
            document.getElementById("delete"+id).submit();
        }
    }
</script>