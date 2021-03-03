<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        'nombre' => 'Restaurante'
        ]);
    }
}
