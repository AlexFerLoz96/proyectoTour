<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resena;

class ResenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resenaList = Resena::all();
        return view('resena.index', ['resenaList'=>$resenaList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resena.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $resena = new Resena();
        $resena->comentario = $r->comentario;
        $resena->puntuacion = $r->puntuacion;
        $resena->fecha = $r->fecha;
        $resena->save();
        return redirect()->route('resena.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resena = Resena::find($id);
        $data['resena'] = $resena;

        return view('resena.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resena = Resena::find($id);
        return view('resena.edit', array('resena'=>$resena));
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
        $resena = Resena::find($r->id);
        $resena->comentario = $r->comentario;
        $resena->puntuacion = $r->puntuacion;
        $resena->fecha = $r->fecha;
        $resena->save();
        return redirect()->route('resena.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resena = Resena::find($id);
        $resena->delete();
        return redirect()->route('resena.index');    }
}
