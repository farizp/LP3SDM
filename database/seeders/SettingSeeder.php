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
            'id' => 1,
            'image1' => '',
            'title1' => 'Title',
            'desc1' => 'description',
            'image2' => '',
            'title2' => 'Title',
            'desc2' => 'description',
            'image3' => '',
            'title3' => 'Title',
            'desc3' => 'description',
             
        ]);
    }
}
