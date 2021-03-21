@extends("layouts.master")

@section("title", "imagen")

@section("header", "imagen")

@section("content")
    <a href="{{ route('imagen.create') }}" class="btn btn-success">New</a>
    <table class="table">
    <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th >Imagen</th>
                <th>Ruta</th>
                <th>Descripción</th>
                <th>Comercio</th>
                <th>Lugar</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
    @foreach ($imagenList as $imagen)
        <tr>
            <td>{{$imagen->id}}</td>
            <td style="width:20%;"><img src="assets/imgs/comercio/{{$imagen->ruta}}" alt="" style="width:100%;"></td>
            <td>{{$imagen->ruta}}</td>
            <td>{{$imagen->descripcion}}</td>
            @isset($imagen->comercio->nombre)
                <td>{{$imagen->comercio->nombre}}</td>
                @else
                <td></td>
            @endisset
            @isset($imagen->lugar->nombre)
                <td>{{$imagen->lugar->nombre}}</td>
                @else
                <td></td>
            @endisset
            <td><a href="{{route('imagen.edit', $imagen->id)}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action = "{{route('imagen.destroy', $imagen->id)}}" method="POST" id="delete{{$imagen->id}}">
                    @csrf
                    @method("DELETE")
                    <input type="button"  onclick="question({{ $imagen->id }})" value="Delete" class="btn btn-danger">
                </form>
            </td>
     
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