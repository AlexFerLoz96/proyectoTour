@extends("layouts.master")

@section("title", "imagen")

@section("header", "imagen")

@section("content")
    <a href="{{ route('imagen.create') }}" class="btn btn-success">New</a>
    <table class="table">
    <thead class="thead-dark">
            <tr>
                <th scope="col">Ruta</th>
                <th>Descripción</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
    @foreach ($imagenList as $imagen)
        <tr>
            <td>{{$imagen->ruta}}</td>
            <td>{{$imagen->descripcion}}</td>
            <td><a href="{{route('imagen.edit', $imagen->id)}}" class="btn btn-info">Edit</a></td>
            <td>
                <form action = "{{route('imagen.destroy', $imagen->id)}}" method="POST" id="delete{{$imagen->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $imagen->id }})" value="Delete" class="btn btn-danger">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection
<script>
    function question(id){
        if (confirm('¿Estas seguro de borrar esta imagen?')){
            document.getElementById("delete"+id).submit();
        }
    }
</script>