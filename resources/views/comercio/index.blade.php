@extends("layouts.master")

@section("title", "Comercios")

@section("header", "Comercios")

@section("content")
    <a href="{{ route('comercio.create') }}">New</a>
    <table border='1'>
    @foreach ($comercioList as $comercio)
        <tr>
            <td>{{$comercio->nombre}}</td>
            <td>{{$comercio->ubicacion}}</td>
            <td>{{$comercio->descripcion}}</td>
            <td><a href="{{route('comercio.edit', $comercio->id)}}">Edit</a></td>
            <td>
                <form action = "{{route('comercio.destroy', $comercio->id)}}" method="POST" id="delete{{$comercio->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $comercio->id }})" value="Delete">
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