<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComerciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comercio::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('comercios')->insert([
        'nombre' => 'Taberna',
        'ubicacion' => 'Almeria',
        'descripcion' => 'Lorem ipsum ',
        'prioridad' => '1',
        'categoria_id' => '1'
        ]);
    }
}
