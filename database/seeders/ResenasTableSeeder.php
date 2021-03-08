<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resena;
use DB;

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
        'fecha' => '2021/10/10',
        'user_id' => '1',
        'comercio_id' => '1'
        ]);
    }
}
