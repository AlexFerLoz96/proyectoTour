<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ComerciosTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(ImagensTableSeeder::class);
        $this->call(ResenasTableSeeder::class);
        $this->call(LugarsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
