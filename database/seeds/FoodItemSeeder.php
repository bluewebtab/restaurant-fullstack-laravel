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

        DB::table('food_items')->insert([
            'title' => 'Chicken Wings',
            'description' => 'Crispy chicken, cheese, grilled onions, tomatoes, lettuce, garlic sauce, buffalo sauce, and mayo',
            'price' => 11.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Steak',
            'description' => 'Crispy chicken, cheese, grilled onions, tomatoes, lettuce, garlic sauce, buffalo sauce, and mayo',
            'price' => 22.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Steak and Ribs',
            'description' => 'Crispy chicken, cheese, grilled onions, tomatoes, lettuce, garlic sauce, buffalo sauce, and mayo',
            'price' => 30.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Cesar Salad',
            'description' => 'Crispy chicken, cheese, grilled onions, tomatoes, lettuce, garlic sauce, buffalo sauce, and mayo',
            'price' => 10.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Chocolate Cake',
            'description' => 'Crispy chicken, cheese, grilled onions, tomatoes, lettuce, garlic sauce, buffalo sauce, and mayo',
            'price' => 8.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Sprite',
            'description' => 'Crispy chicken, cheese, grilled onions, tomatoes, lettuce, garlic sauce, buffalo sauce, and mayo',
            'price' => 1.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Greygoose',
            'description' => 'Crispy chicken, cheese, grilled onions, tomatoes, lettuce, garlic sauce, buffalo sauce, and mayo',
            'price' => 9.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('food_items')->insert([
            'title' => 'Jameson',
            'description' => 'Crispy chicken, cheese, grilled onions, tomatoes, lettuce, garlic sauce, buffalo sauce, and mayo',
            'price' => 9.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
