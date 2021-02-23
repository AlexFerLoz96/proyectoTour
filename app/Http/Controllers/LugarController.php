<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lugar;


class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugarList = Lugar::all();
        return view('lugar.index', ['lugarList'=>$lugarList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lugar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $lugar = new Lugar();
        $lugar->nombre = $r->nombre;
        $lugar->imagen = $r->imagen;
        $lugar->descripcion = $r->descripcion;
        $lugar->save();
        return redirect()->route('lugar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lugar = Lugar::find($id);
        $data['lugar'] = $lugar;

        return view('lugar.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lugar = Lugar::find($id);
        return view('lugar.edit', array('lugar'=>$lugar));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r)
    {
        $lugar = Lugar::find($r->id);
        $lugar->nombre = $r->nombre;
        $lugar->imagen = $r->imagen;
        $lugar->descripcion = $r->descripcion;
        $lugar->save();
        return redirect()->route('lugar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lugar = Lugar::find($id);
        $lugar->delete();
        return redirect()->route('lugar.index');
    }
}
