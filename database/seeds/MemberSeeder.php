<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'Ron',
            'lname' => 'Jordan',
            'email' => 'rj@gmail.com',
            'phone_number' => '1234567890',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
