<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Fariz Prasetya',
            'nip' => '1923250050',
            'level' => 'admin',
            'email' => 'farizp@mhs.mdp.ac.id',
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(60),
        ], [
            'name' => 'Administrasi',
            'nip' => '1234567891',
            'level' => 'admin',
            'email' => 'farizp215@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(60),
        ]);
    }
}
