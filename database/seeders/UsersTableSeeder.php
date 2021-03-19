<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
use Hash;
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
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123')
        ]);

        DB::table('users')->insert([ //2
            'name' => 'alex',
            'email' => 'alex@alex.com',
            'password' => Hash::make('alex')
        ]);
        DB::table('users')->insert([ //3
            'name' => 'arturo',
            'email' => 'arturo@arturo.com',
            'password' => Hash::make('arturo')
        ]);
        DB::table('users')->insert([ //3
            'name' => 'pechipao',
            'email' => 'pechis@pao.com',
            'password' => Hash::make('pechipao')
        ]);
    }
}
