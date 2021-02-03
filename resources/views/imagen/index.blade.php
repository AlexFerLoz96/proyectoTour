@extends("layouts.master")

@section("title", "imagen")

@section("header", "imagen")

@section("content")
    <a href="{{ route('imagen.create') }}">New</a>
    <table border='1'>
    @foreach ($imagenList as $imagen)
        <tr>
            <td>{{$imagen->ruta}}</td>
            <td>{{$imagen->descripcion}}</td>
            <td><a href="{{route('imagen.edit', $imagen->id)}}">Edit</a></td>
            <td>
                <form action = "{{route('imagen.destroy', $imagen->id)}}" method="POST" id="delete{{$imagen->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $imagen->id }})" value="Delete">
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