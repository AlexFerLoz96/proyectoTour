<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::truncate(); // Optativo: vacía la tabla antes de rellenarla

        /**
         * Run the database seeds.
         *
         * @return void
         */
        DB::table('users')->insert([ //1
            'name' => 'Alex',
            'email' => 'alex@gmail.com',
            'password' => 'alex',
        ]);

        DB::table('users')->insert([ //2
            'name' => 'Arturo',
            'email' => 'arturo@gmail.com',
            'password' => 'arturo',
        ]);

        DB::table('users')->insert([ //3
            'name' => 'Alfredo',
            'email' => 'alfredo@gmail.com',
            'password' => 'alfredo',
        ]);

        DB::table('users')->insert([ //4
            'name' => 'PechiP',
            'email' => 'pechi@gmail.com',
            'password' => 'pechi',
        ]);
    }
}
