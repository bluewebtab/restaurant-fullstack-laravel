<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => "Food Central Co. has been serving true Southern hospitality and some of the best real pit BBQ around. The restaurant makes its home in The Vineyards, one of Los Angeles' premier lifestyle centers offering world class entertainment, dining and shopping.",
            'keywords' => "Burgers, Local Burger, Food Central Co., Salads, Best Burgers in Town",
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
