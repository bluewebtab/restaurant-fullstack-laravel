<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'The Central Burger',
            'description' => 'Crispy onion strings, cheddar cheese, bacon, lettuce, roasted tomato, hickory sauce',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'The Beef Bacon Burger',
            'description' => 'Beef patty, cheddar cheese, beef bacon, grilled onions and tomatoes, pickled, lettuce, ketcup, mayo, mustard',
            'price' => 8.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'The Spicy Buffalo Burger',
            'description' => 'Crispy chicken, cheese, grilled onions, tomatoes, lettuce, garlic sauce, buffalo sauce, and mayo',
            'price' => 11.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
