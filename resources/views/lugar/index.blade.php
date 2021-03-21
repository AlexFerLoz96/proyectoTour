@extends("layouts.master")

@section("title", "Lugars")

@section("content")
    <a href="{{ route('lugar.create') }}" class="btn btn-success">New</a>
    <table class="table">
    <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th>Lugares</th>
                <th>Descripción</th>

                <th></th>
                <th></th>
            </tr>
        </thead>

    @foreach ($lugarList as $lugar)
        <tr>
            <td>{{$lugar->id}}</td>
            <td>{{$lugar->nombre}}</td>
            <td>{{$lugar->descripcion}}</td>
            <td><a href="{{route('lugar.edit', $lugar->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action = "{{route('lugar.destroy', $lugar->id)}}" method="POST" id="delete{{$lugar->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $lugar->id }})" value="Delete" class="btn btn-danger">
                </form> 
            </td>
       
    @endforeach
    </table>
@endsection
<script>
    function question(id){
        if (confirm('¿Estas seguro de borrar este lugar?')){
            document.getElementById("delete"+id).submit();
        }
    }
</script>