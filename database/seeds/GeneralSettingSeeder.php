<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Food Central Co.',
            'logo_image_url' => '/img/foodcentrallogo.png',
            'address_1' => '327 W 42nd St,',
            'address_2' => '',
            'city' => 'New York',
            'state' => 'NY',
            'zipcode' => '10036',
            'phone_number' => '123-456-7890',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
