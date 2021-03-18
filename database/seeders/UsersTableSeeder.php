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
    DB::table('users')->insert([//34
        'name' => 'Alex',
        'email' => 'alex@gmail.com',
        'password' => 'alex',
    ]);

    DB::table('users')->insert([//34
        'name' => 'Arturo',
        'email' => 'arturo@gmail.com',
        'password' => 'arturo',
    ]);

    DB::table('users')->insert([//34
        'name' => 'Alfredo',
        'email' => 'alfredo@gmail.com',
        'password' => 'alfredo',
    ]);

    DB::table('users')->insert([//34
        'name' => 'PechiP',
        'email' => 'pechi@gmail.com',
        'password' => 'pechi',
    ]);
}
