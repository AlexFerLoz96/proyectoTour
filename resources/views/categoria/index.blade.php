@extends("layouts.master")

@section("title", "Categorias")

@section("header", "Categorias")

@section("content")
    <a href="{{ route('categoria.create') }}" class="btn btn-success">New</a>
    <table class="table">
    <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th>Categorías</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
    @foreach ($categoriaList as $categoria) 
       
        <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nombre}}</td>
            <td><a href="{{route('categoria.edit', $categoria->id)}}" class="btn btn-info">Edit</a></td>
            <td>
                <form action = "{{route('categoria.destroy', $categoria->id)}}" method="POST" id="delete{{$categoria->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $categoria->id }})" value="Delete" class="btn btn-danger">
                </form>
            </td>
        <br>
    @endforeach
    
    </table>
@endsection
<script>
    function question(id){
        if (confirm('¿Estas seguro de borrar esta categoría?')){
            document.getElementById("delete"+id).submit();
        }
    }
</script>