<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Billy',
            'lname' => 'Doe',
            'email' => 'billy@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'fname' => 'Jane',
            'lname' => 'Doe',
            'email' => 'jane@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
