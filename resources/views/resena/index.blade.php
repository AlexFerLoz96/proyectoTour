@extends("layouts.master")

@section("title", "resenas")

@section("header", "resenas")

@section("content")
    <a href="{{ route('resena.create') }}">New</a>
    <table border='1'>
    @foreach ($resenaList as $resena)
        <tr>
            <td>{{$resena->comentario}}</td>
            <td>{{$resena->puntuacion}}</td>
            <td>{{$resena->fecha}}</td>
            <td><a href="{{route('resena.edit', $resena->id)}}">Edit</a></td>
            <td>
                <form action = "{{route('resena.destroy', $resena->id)}}" method="POST" id="delete{{$resena->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $resena->id }})" value="Delete">
                </form>
            </td>
        <br>
    @endforeach
    </table>
@endsection
<script>
    function question(id){
        if (confirm('¿Estas seguro de borrar esta reseña?')){
            document.getElementById("delete"+id).submit();
        }
    }
</script>