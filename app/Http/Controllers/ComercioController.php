<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comercio;
use App\Models\Categoria;
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
        $comercioList = Comercio::all()->take(10);
        $categoriaList = Categoria::all();

        $imagenList = DB::table('imagens')
            ->join('comercios', 'comercios.id', '=','imagens.comercio_id')
            ->select('imagens.*')
            ->get();

        $imagenCiudad = DB::table('imagens')
            ->join('comercios', 'comercios.id', '=', 'imagens.comercio_id')
            ->select('imagens.*')
            ->where('comercios.nombre', '=', 'Almería')
            ->take(8)
            ->get();
        
        return view('main.index',compact('categoriaList','comercioList','imagenList', 'imagenCiudad'));
    }

    public function search(Request $r)
    {
        $key = trim($r->get('busqueda'));

        $palabraBusqueda = $key;

        $categoriaList = Categoria::all();

        $consultaComercio = DB::table('comercios')
            ->where('nombre', 'like', "%{$key}%")
            ->orWhere('ubicacion', 'like', "%{$key}%")
            ->orWhere('descripcion', 'like', "%{$key}%")
            ->orderBy('id')
            //->take(1)
            ->get();
        
        $contador = $consultaComercio->count();
        
        $consultaCategoria = DB::table('categorias')
            ->where('nombre', 'like', "%{$key}%")
            ->orderBy('id')
            ->get();

        $imagenList = DB::table('imagens')
        ->join('comercios', 'comercios.id', '=','imagens.comercio_id')
        ->select('imagens.*')
        ->get();

        return view('comercio.search', compact('categoriaList', 'consultaComercio', 'consultaCategoria', 'palabraBusqueda', 'imagenList', 'contador'));
    }

    public function index()
    {
        $comercioList = Comercio::all();
        $nombreCategoria = DB::table('comercios')
            ->join('categorias', 'categorias.id', '=', 'comercios.categoria_id')
            ->select('categorias.nombre')
            ->take(1)
            ->get();
            

        
        
        return view('comercio.index', compact('comercioList', 'nombreCategoria'));
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
        $data['comercio'] = $comercio;

        return view('comercio.public', $data);
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
        return view('comercio.edit', array('comercio'=>$comercio));
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
