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
                'key' => 'privacy_policy',
                'value' => '',
            ],
            [
                'key' => 'about_us',
                'value' => '',
            ],
            [
                'key' => 'logo',
                'value' => '',
            ],
            [
                'key' => 'app_name',
                'value' => 'Journal PECAN',
            ],
            [
                'key' => 'email',
                'value' => '',
            ],
            [
                'key' => 'description',
                'value' => '',
            ],
            [
                'key' => 'facebook_link',
                'value' => '',
            ],
            [
                'key' => 'instagram_link',
                'value' => '',
            ],
            [
                'key' => 'twitter_link',
                'value' => '',
            ],
            [
                'key' => 'linkedin_link',
                'value' => '',
            ],
            [
                'key' => 'youtube_link',
                'value' => '',
            ],
            [
                'key' => 'zotero_link',
                'value' => '',
            ],
            [
                'key' => 'association',
                'value' => '',
            ],
            [
                'key' => 'organization',
                'value' => '',
            ]
        ]);
    }
}
