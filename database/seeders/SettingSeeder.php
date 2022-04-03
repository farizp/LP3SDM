<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'id' => 1,
                'image' => '',
                
            ],
            [
                'id' => 2,
                'image' => '',
            ],
            [
                'id' => 3,
                'image' => '',
            ]
        ]);
    }
}
