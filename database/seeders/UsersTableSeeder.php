<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resena::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'password' => '$2y$10$e1vUIbIHpVb0R.jjCt.zLu3wgtCO9F1hrx/Fvevjp0ozpZmByrJ8i'//admin123
        ]);
    }
}
