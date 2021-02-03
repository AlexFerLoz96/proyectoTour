@extends("layouts.master")

@section("title", "modelo")

@section("header", "modelo")

@section("content")
    <a href="{{ route('modelo.create') }}">New</a>
    <table border='1'>
    @foreach ($modeloList as $modelo)
        <tr>
            <td>{{$modelo->ruta}}</td>
            <td>{{$modelo->descripcion}}</td>
            <td><a href="{{route('modelo.edit', $modelo->id)}}">Edit</a></td>
            <td>
                <form action = "{{route('modelo.destroy', $modelo->id)}}" method="POST" id="delete{{$modelo->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $modelo->id }})" value="Delete">
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