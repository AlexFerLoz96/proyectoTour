<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Imagen::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('imagens')->insert([
        'ruta' => 'Taberna',
        'descripcion' => 'Almeria',
        'comercio_id' => '',
        'lugar_id' => ''
        ]);
    }
}
