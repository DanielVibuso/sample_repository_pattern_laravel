<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
                ->count(50)
                ->create();

        //Seeders não randomicos exemplos
        /*
         DB::table('users')->insert(['name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
        */

        /*
        Users::create(['name'=>'daniel', 'email' = 'daniel@email'])
        */
    }
}
