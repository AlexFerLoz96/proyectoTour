<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comercio;
use App\Models\Categoria;
use App\Models\Resena;
use App\Models\Imagen;
use App\Models\Lugar;
use DB;

class ComercioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function public()
    {
        $comercioPrioridad = DB::table('comercios')
        ->select('*')
        ->where('prioridad','=','1')
        ->get();

        $comercioList = Comercio::all();

        $categoriaList = Categoria::all();

        $resenaList = Resena::all();

        $imagenList = Imagen::all();

        $lugarList = DB::table('lugars')
            ->select('*')
            ->take(8)
            ->get();
        
        return view('main.index',compact('comercioPrioridad','categoriaList','comercioList','resenaList','imagenList', 'lugarList'));
    }

    public function search(Request $r)
    {
        $key = trim($r->get('busqueda'));

        $palabraBusqueda = $key;

        $categoriaList = Categoria::all();

        $consultaComercio = DB::table('comercios')
            ->join('categorias', 'categorias.id', '=','comercios.categoria_id')
            ->select('comercios.*')
            ->where('comercios.nombre', 'like', "%{$key}%")
            ->orWhere('comercios.ubicacion', 'like', "%{$key}%")
            ->orWhere('comercios.descripcion', 'like', "%{$key}%")
            ->orWhere('categorias.nombre','like',"%{$key}%")
            ->orderBy('comercios.id')
            ->get();
            
        $imagenList = DB::table('imagens')
        ->join('comercios', 'comercios.id', '=','imagens.comercio_id')
        ->select('imagens.*')
        ->get();

        $contador = $consultaComercio->count();
        
        


        return view('comercio.search', compact('categoriaList', 'consultaComercio','imagenList', 'palabraBusqueda', 'contador'));
    }

    public function listaComercioCategoria(Request $r){
        $nombreCategoria = $r->get('nombreCategoria');

        $categoriaId = DB::table('categorias')
            ->select('categorias.id')
            ->where($nombreCategoria, '=', 'categorias.nombre')
            ->get();

            var_dump($categoriaId);
        /*$comercioCategoriaList = DB::table('comercios')
            ->select('comercios.*')
            ->where*/
            
        return view('comercio.search');
    }

    public function index()
    {
        $comercioList = Comercio::all();
        return view('comercio.index', compact('comercioList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comercioList = Comercio::all();
        $categoriaList = Categoria::all();
        return view('comercio.create', compact('comercioList','categoriaList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $comercio = new Comercio();
        $comercio->nombre = $r->nombre;
        $comercio->ubicacion = $r->ubicacion;
        $comercio->descripcion = $r->descripcion;
        $comercio->prioridad = $r->prioridad;
        $comercio->categoria_id = $r->categoria_id;
        $comercio->save();
        return redirect()->route('comercio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comercio = Comercio::find($id);

        $imagenList = Imagen::all();

        $categoriaList = Categoria::all();

        $comercioPrioridad = DB::table('comercios')
        ->select('*')
        ->where('prioridad','=','1')
        ->where('comercios.id', '!=', "{$id}")
        ->take(4)
        ->get();

        return view('comercio.public', compact('categoriaList','comercio', 'imagenList', 'comercioPrioridad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comercio = Comercio::find($id);
        $categoriaList = Categoria::all();
        return view('comercio.edit', compact('comercio','categoriaList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r)
    {
        $comercio = Comercio::find($r->id);
        $comercio->nombre = $r->nombre;
        $comercio->ubicacion = $r->ubicacion;
        $comercio->descripcion = $r->descripcion;
        $comercio->prioridad = $r->prioridad;
        $comercio->categoria_id = $r->categoria_id;
        $comercio->save();
        return redirect()->route('comercio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comercio = Comercio::find($id);
        $comercio->delete();
        return redirect()->route('comercio.index');
    }
}
