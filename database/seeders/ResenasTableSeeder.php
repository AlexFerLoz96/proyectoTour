<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ResenasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resena::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('resenas')->insert([
        'comentario' => 'muy bueno',
        'puntuacion' => '4',
        'fecha' => '10/10/2021',
        'user_id' => '1',
        'comercio_id' => '1'
        ]);
    }
}
