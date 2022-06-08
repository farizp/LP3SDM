<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        User::create(
            [
                'name' => 'Fariz Prasetya',
                'nip' => '1923250050',
                'level' => 'admin',
                'email' => 'farizp@mhs.mdp.ac.id',
                'password' => bcrypt('123456'),
                'remember_token' => Str::random(60),
            ],
        );

        User::create(
            [
                'name' => 'Admin',
                'nip' => 'admin',
                'level' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'remember_token' => Str::random(60),
            ]
            );
    }
}
