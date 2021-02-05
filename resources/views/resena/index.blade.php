@extends("layouts.master")

@section("title", "resenas")

@section("header", "resenas")

@section("content")
    <a href="{{ route('resena.create') }}" class="btn btn-success">New</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Reseña</th>
                <th>Comentario</th>
                <th>Puntuación</th>
                <th>Fecha</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
    @foreach ($resenaList as $resena) 
        <tr>
            <td>{{$resena->id}}</td>
            <td>{{$resena->comentario}}</td>
            <td>{{$resena->puntuacion}}</td>
            <td>{{$resena->fecha}}</td>
            <td><a href="{{route('resena.edit', $resena->id)}}" class="btn btn-info">Edit</a></td>
            <td>
                <form action = "{{route('resena.destroy', $resena->id)}}" method="POST" id="delete{{$resena->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $resena->id }})" value="Delete" class="btn btn-danger">
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