<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LugarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lugar::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('lugars')->insert([
        'nombre' => 'Alcazaba',
        'descripcion' => 'Fortaleza antigua almeria bla bla bla'
        ]);
    }
}
