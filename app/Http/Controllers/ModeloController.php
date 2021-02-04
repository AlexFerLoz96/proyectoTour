<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modeloList = Modelo::all();
        return view('modelo.index', ['modeloList'=>$modeloList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modelo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $modelo = new Modelo();
        $modelo->ruta = $r->ruta;
        $modelo->descripcion = $r->descripcion;
        $modelo->save();
        return redirect()->route('modelo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = Modelo::find($id);
        $data['modelo'] = $modelo;

        return view('modelo.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo = Modelo::find($id);
        return view('modelo.edit', array('modelo'=>$modelo));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r)
    {
        $modelo = Modelo::find($r->id);
        $modelo->ruta = $r->ruta;
        $modelo->descripcion = $r->descripcion;
        $modelo->save();
        return redirect()->route('modelo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modelo = Modelo::find($id);
        $modelo->delete();
        return redirect()->route('modelo.index');
    }
}