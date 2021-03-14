<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Resena;
use App\Models\Comercio;
use App\Models\User;
use Illuminate\Support\Carbon;

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
        $userList = User::all();
        $comercioList = Comercio::all();
        return view('resena.index', compact('resenaList','userList','comercioList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $userList = User::all();
        $comercioList = Comercio::all();
        return view('resena.create',compact('userList','comercioList'));
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
        $resena->fecha = Carbon::now()->format('Y-m-d');
        $resena->user_id = Auth::User()->id; //Modificar por variable de session de usuario
        $resena->comercio_id = $r->comercio_id;
        $resena->save();
        return redirect()->route('comercio.public',$r->comercio_id);
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
        $userList = User::all();
        $comercioList = Comercio::all();
        return view('resena.edit',compact('resena','userList','comercioList'));
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
        $resena->user_id = $r->user_id;
        $resena->comercio_id = $r->comercio_id;
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
