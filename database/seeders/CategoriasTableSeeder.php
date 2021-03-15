<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('categorias')->insert([
        'nombre' => 'Bar-Restaurante' //1
        ]);

        Categoria::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('categorias')->insert([
        'nombre' => 'Alojamiento' //2
        ]);

        Categoria::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('categorias')->insert([
        'nombre' => 'Alimentación' //3
        ]);

        Categoria::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('categorias')->insert([
        'nombre' => 'Tienda de ropa' //4
        ]);

        Categoria::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('categorias')->insert([
        'nombre' => 'Ocio' //5
        ]);

        Categoria::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('categorias')->insert([
        'nombre' => 'Electrónica' //6
        ]);

        Categoria::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('categorias')->insert([
        'nombre' => 'Deportes' //7 
        ]);
    }
}
