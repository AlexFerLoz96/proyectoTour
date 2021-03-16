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
        'nombre' => 'Restaurantes y bares' //1
        ]);

        DB::table('categorias')->insert([
        'nombre' => 'Cafeterías' //2
        ]);

        DB::table('categorias')->insert([
        'nombre' => 'Hoteles' //3
        ]);

        DB::table('categorias')->insert([
        'nombre' => 'Academias' //4
        ]);

        DB::table('categorias')->insert([
        'nombre' => 'Tiendas de alimentación' //5
        ]);

        DB::table('categorias')->insert([
        'nombre' => 'Tiendas de ropa' //6
        ]);
    }
}
