<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imagen;
use DB;

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
        'ruta' => 'alcazaba.jpg',
        'descripcion' => 'Alcazaba',
        'lugar_id' => '1'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'catedral.jpg',
            'descripcion' => 'Catedral de Almería',
            'lugar_id' => '2'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'sierranevada.jpg',
            'descripcion' => 'Sierra Nevada',
            'lugar_id' => '3'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'cabogata.jpg',
            'descripcion' => 'Cabo de Gata',
            'lugar_id' => '4'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'costa.jpg',
            'descripcion' => 'Costa de Almería',
            'lugar_id' => '5'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'minihollywood.jpg',
            'descripcion' => 'Mini Hollywood',
            'lugar_id' => '6'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'sorbas.jpg',
            'descripcion' => 'Cuevas de Sorbas',
            'lugar_id' => '7'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'museo.jpg',
            'descripcion' => 'Museo de Almeria',
            'lugar_id' => '8'
        ]);
    }
}
