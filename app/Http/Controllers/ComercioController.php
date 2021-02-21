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
        $comercioList = Comercio::all();
        $categoriaList = Categoria::all();

        $imagenList = DB::table('imagens')
            ->join('comercios', 'comercios.id', '=','imagens.comercio_id')
            ->select('imagens.*')
            ->take(1)
            ->get();
        return view('main.index',compact('categoriaList','comercioList','imagenList'));
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

        $consultaCategoria = DB::table('categorias')
            ->where('nombre', 'like', "%{$key}%")
            ->orderBy('id')
            ->get();

        return view('comercio.search', compact('categoriaList', 'consultaComercio','consultaCategoria','palabraBusqueda'));
    }

    public function index()
    {
        $comercioList = Comercio::all();
        
        return view('comercio.index', ['comercioList'=>$comercioList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comercio.create');
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
