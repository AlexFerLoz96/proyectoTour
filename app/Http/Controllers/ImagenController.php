<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;
use App\Models\Comercio;
use Faker\Provider\Image;

use Iluminate\Support\Facades\Storage;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenList = Imagen::all();
        return view('imagen.index', ['imagenList'=>$imagenList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comercioList=Comercio::all();
        return view('imagen.create',['comercioList'=>$comercioList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        if($r->hasFile('ruta')){


            foreach($r->file('ruta') as $file)
            {
                $nombrearchivo = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path("assets/imgs/comercio"), $nombrearchivo);
                $imagen = new Imagen($r->all());
                $imagen->ruta = $nombrearchivo;
                $imagen->descripcion = $r->descripcion;
                $imagen->comercio_id = $r->comercio_id;
                $imagen->save();
            }
        }
        return redirect()->route('imagen.index')->with("success","Noticia creada correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imagen = Imagen::find($id);
        $data['imagen'] = $imagen;

        return view('imagen.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imagen = Imagen::find($id);
        return view('imagen.edit', array('imagen'=>$imagen));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r)
    {
        $imagen = Imagen::find($r->id);
        $imagen->ruta = $r->ruta;
        $imagen->descripcion = $r->descripcion;
        $imagen->comercio_id = $r->comercio_id;
        $imagen->save();
        return redirect()->route('imagen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imagen = Imagen::find($id);
        $imagen->delete();
        return redirect()->route('imagen.index');
    }
}
