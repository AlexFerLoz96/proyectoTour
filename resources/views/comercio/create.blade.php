@extends("layouts.master")

<script type="text/javascript">
    function insertarUbicacion(){
        var ubicacion = document.querySelector("#mapa");
        console.log(ubicacion.src);
    }
</script>

@section("title", "Inserción de comercio")

@section("header", "Inserción de comercio")

@section("content")
    @isset($comercio)
        <form class="bg-light border p-4" action="{{ route('comercio.update', ['id' => $comercio->id]) }}" method="POST">
        @method("PUT")
    @else
        <form class="bg-light border p-4" action="{{ route('comercio.store') }}" method="POST">
    @endisset
        @csrf
        <h2>Nuevo comercio</h2>
        Nombre:<input class="form-control" type="text" name="nombre" value="{{$comercio->nombre ?? '' }}"><br>
        Orden:<input class="form-control" type="text" name="orden" value="{{$comercio->orden ?? '' }}"><br>
        Ubicacion: <input class="form-control" type="text" name="ubicacion" value="{{$comercio->ubicacion ?? '' }}">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary my-2" data-toggle="modal" data-target="#exampleModalCenter">Abrir maps</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="modal-body">
                    <iframe id="mapa" width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Almeria&amp;t=&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="insertarUbicacion()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        Descripcion: <div class="form-group mb-4"><textarea rows=4 class="form-control mt-2 mb-4" type="text" name="descripcion" value="{{$comercio->descripcion ?? ''}}"></textarea></div><br>
        Prioridad: <input class="form-control" type="number" min="1" name="prioridad" value="{{$comercio->prioridad ?? ''}}"><br>
        Categoria: <select class="form-control" name="categoria_id" id="">
            <option >-- Seleccionar categoria --</option>
            @foreach($categoriaList as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
            @endforeach
        </select><br>
        <input class="btn btn-success" type="submit">
        </form>

@endsection