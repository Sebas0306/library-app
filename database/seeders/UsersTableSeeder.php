<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::truncate();

        $faker = \Faker\Factory::create();
        $password = 'admin';

        \App\Models\User::create([
            'userName' => 'Admin',
            'email' => 'usuarioAdmin@hotmail.com',
            'password' => $password,
            'role'=> 'admin'
        ]);

    }
}
