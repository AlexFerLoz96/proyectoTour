<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comercio;
use App\Models\Categoria;
use App\Models\Resena;
use App\Models\Imagen;
use App\Models\Lugar;
use DB;
use PHPUnit\Framework\SkippedTest;

class ComercioController extends Controller
{
/*-------------------------------------------------------------------------------
--------------------------CONSULTAS DE LA PÁGINA PRINCIPAL-----------------------
--------------------------------------------------------------------------------*/
    public function public()
    {
        $comercioPrioridad = DB::table('comercios')
        ->select('*')
        ->where('prioridad','=','1')
        ->orderBy('orden')
        ->get();

        $comercioList = Comercio::all();

        $categoriaList = Categoria::all();

        $resenaList = DB::table('resenas')
            ->select(DB::raw('round(avg(puntuacion), 1) as puntuacion, comercio_id'))
            ->groupBy('comercio_id')
            ->get();

        $imagenList = Imagen::all();

        $lugarList = DB::table('lugars')
            ->select('*')
            ->take(8)
            ->get();
        
        return view('main.index',compact('comercioPrioridad','categoriaList','comercioList','resenaList','imagenList', 'lugarList'));
    }

/*-------------------------------------------------------------------------------
-------------------------------Cargar datos por AJAX-----------------------------
--------------------------------------------------------------------------------*/


    public function cargarDatos($prioridad){
        $comercioPrioridad = DB::table('comercios')
        ->select('*')
        ->where('prioridad','=',"{$prioridad}")
        ->get();
        
        $resena = DB::table('resenas')
        ->select(DB::raw('round(avg(puntuacion), 1) as puntuacion, comercio_id'))
        ->groupBy('comercio_id')
        ->get();

        $imgs = Imagen::all();

        return response()->json(compact('comercioPrioridad', 'resena','imgs'));
    }


    public function cargarDatosSearch($key,$skip){

        $comercio = DB::table('comercios')
        ->join('categorias', 'categorias.id', '=','comercios.categoria_id')
        ->select('comercios.*')
        ->where('comercios.nombre', 'like', "%{$key}%")
        ->orWhere('comercios.ubicacion', 'like', "%{$key}%")
        ->orWhere('comercios.descripcion', 'like', "%{$key}%")
        ->orWhere('categorias.nombre','like',"%{$key}%")
        ->orderBy('comercios.id')
        ->skip($skip)
        ->take(10)
        ->get();
        
        $resena = DB::table('resenas')
        ->select(DB::raw('round(avg(puntuacion), 1) as puntuacion, comercio_id'))
        ->groupBy('comercio_id')
        ->get();

        $imgs = Imagen::all();

        return response()->json(compact('comercio', 'resena','imgs'));
    }

/*-------------------------------------------------------------------------------
------------------------CONSULTAS DE LA VISTA DE BÚSQUEDA------------------------
--------------------------------------------------------------------------------*/

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
            ->take(10)
            ->get();

        $consultaComercioAll = DB::table('comercios')
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

        $contador = $consultaComercioAll->count();
        

        return view('comercio.search', compact('categoriaList', 'consultaComercio','imagenList', 'palabraBusqueda', 'contador'));
    }

/*-------------------------------------------------------------------------------
-------------------------------CONSULTA DEL CRUD---------------------------------
--------------------------------------------------------------------------------*/
public function adminsearch(Request $r)
{
    $key = trim($r->get('busqueda'));

    $palabraBusqueda = $key;


    $comercioList = DB::table('comercios')
        ->select('comercios.*')
        ->where('comercios.nombre', 'like', "%{$key}%")
        ->orWhere('comercios.ubicacion', 'like', "%{$key}%")
        ->orWhere('comercios.descripcion', 'like', "%{$key}%")
        ->orderBy('comercios.id')
        ->get();

    $imagenList = DB::table('imagens')
    ->join('comercios', 'comercios.id', '=','imagens.comercio_id')
    ->select('imagens.*')
    ->get();    

    return view('comercio.adminsearch', compact('comercioList','imagenList'));
}


    public function index()
    {
        $comercioList = Comercio::all();
        return view('comercio.index', compact('comercioList'));
    }

    public function ordenar($key){
        $orden = session()->get('orden', 'desc');

        $comercioList = Comercio::orderBy($key,$orden)->get();
        
        $orden = $orden == 'desc' ? 'asc': 'desc';

        session()->put('orden', $orden);

        return view('comercio.index', compact('comercioList'));
    }
/*-------------------------------------------------------------------------------
-------------------------CONSULTAS PARA VISTA DE CREACIÓN------------------------
--------------------------------------------------------------------------------*/

    public function create()
    {
        $comercioList = Comercio::all();
        $categoriaList = Categoria::all();
        return view('comercio.create', compact('comercioList','categoriaList'));
    }

/*-------------------------------------------------------------------------------
-------------------------------GUARDADO DE NUEVO COMERCIO------------------------
--------------------------------------------------------------------------------*/
    public function store(Request $r)
    {
        $comercio = new Comercio();
        $comercio->orden = $r->orden;
        $comercio->nombre = $r->nombre;
        $comercio->ubicacion = $r->ubicacion;
        $comercio->descripcion = $r->descripcion;
        $comercio->prioridad = $r->prioridad;
        $comercio->categoria_id = $r->categoria_id;
        $comercio->save();
        return redirect()->route('comercio.index');
    }

/*-------------------------------------------------------------------------------
---------------------CONSULTAS DE LA VISTA DE CADA COMERCIO----------------------
--------------------------------------------------------------------------------*/
    public function show($id)
    {
        $comercio = Comercio::find($id);

        $imagenList = Imagen::all();

        $categoriaList = Categoria::all();

        $comercioPrioridad = DB::table('comercios')
        ->select('*')
        ->where('prioridad','=','1')
        ->where('comercios.id', '!=', "{$id}")
        ->orderBy('orden')
        ->take(8)
        ->get();

        $imagenComercio = DB::table('imagens')
        ->join('comercios', 'comercios.id', '=','imagens.comercio_id')
        ->select('imagens.*')
        ->where('imagens.comercio_id','=',"{$id}")
        ->get();

        $resenaList = DB::table('resenas')
        ->select('*')
        ->where('comercio_id','=',"{$id}")
        ->get();

        $resenaMedia = DB::table('resenas')
        ->select(DB::raw('round(avg(puntuacion), 1) as puntuacion'))
        ->groupBy('comercio_id')
        ->where('comercio_id','=',"{$id}")
        ->get();

        $usuarioNombre = DB::table('users')
        ->join('resenas', 'resenas.user_id', '=','users.id')
        ->select('users.*')
        ->get();

        $hayResena=false;
        if(isset(Auth::User()->id)){
        foreach($resenaList as $resena){
                    if(Auth::User()->id == $resena->user_id){
                        $hayResena=true;
                    }
                    else{
                        $hayResena=false;
                    }
                }
        }
        

        $contador = $resenaList->count();

        return view('comercio.public', compact('categoriaList','comercio', 'imagenList','imagenComercio', 'resenaMedia', 'comercioPrioridad','resenaList','usuarioNombre', 'contador','hayResena'));
    }

/*-------------------------------------------------------------------------------
-----------------------CONSULTAS PARA EDITAR CADA COMERCIO-----------------------
--------------------------------------------------------------------------------*/

    public function edit($id)
    {
        $comercio = Comercio::find($id);
        $categoriaList = Categoria::all();
        return view('comercio.edit', compact('comercio','categoriaList'));
    }

/*-------------------------------------------------------------------------------
-------------------------------ACTUALIZAR CADA COMERCIO--------------------------
--------------------------------------------------------------------------------*/
    public function update(Request $r)
    {
        $comercio = Comercio::find($r->id);
        $comercio->orden = $r->orden;
        $comercio->nombre = $r->nombre;
        $comercio->ubicacion = $r->ubicacion;
        $comercio->descripcion = $r->descripcion;
        $comercio->prioridad = $r->prioridad;
        $comercio->categoria_id = $r->categoria_id;
        $comercio->save();
        return redirect()->route('comercio.index');
    }

/*-------------------------------------------------------------------------------
-------------------------ELIMINACIÓN DE CADA COMERCIO----------------------------
--------------------------------------------------------------------------------*/
    public function destroy($id)
    {
        $comercio = Comercio::find($id);
        $comercio->delete();
        return redirect()->route('comercio.index');
    }
}
