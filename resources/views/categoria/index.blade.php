@extends("layouts.master")

@section("title", "Categorias")

@section("header", "Categorias")

@section("content")
    <a href="{{ route('categoria.create') }}">New</a>
    <table border='1'>
    @foreach ($categoriaList as $categoria)
        <tr>
            <td>{{$categoria->name}}</td>
            <td>{{$categoria->email}}</td>
            <td>{{$categoria->password}}</td>
            <td><a href="{{route('categoria.edit', $categoria->id)}}">Edit</a></td>
            <td>
                <form action = "{{route('categoria.destroy', $categoria->id)}}" method="POST" id="delete{{$categoria->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{$categoria->id}})" value="Delete">
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