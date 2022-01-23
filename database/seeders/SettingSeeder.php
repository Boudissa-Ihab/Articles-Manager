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
                'key' => 'terms_and_policies',
                'value' => '',
            ],
            [
                'key' => 'about_us',
                'value' => '',
            ],
            [
                'key' => 'logo',
                'value' => '',
            ]
        ]);
    }
}
