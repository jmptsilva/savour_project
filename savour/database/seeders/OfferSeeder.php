<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert([
            
           
            [

                'name' => 'Pie',

                'restaurant_id' => '4',

                'description' => 'minced lamb with potatoes and Worcestershire sauce',

                'image' => 'Shepherds-Pie.jpg',

                'quantity' => '14',

                'price' => '12.50',

                'is_active' => '1',

            ],

            [

                'name' => 'con carne',

                'restaurant_id' => '3',

                'description' => 'lean minced beef, 2 medium onions, 3 garlic cloves, hot chilli powder ',

                'image' => 'chilli.jpg',

                'quantity' => '10',

                'price' => '10',

                'is_active' => '1',

            ],

            [

                'name' => 'Tacos',

                'restaurant_id' => '3',

                'description' => 'Beef, Onion, Garlic, Chilli powder, Oregano ',

                'image' => 'tacos.jpg',

                'quantity' => '30',

                'price' => '8',

                'is_active' => '1',

            ],







            [

                'name' => 'Bolognese',

                'restaurant_id' => '2',

                'description' => 'Pasta of your choice, Red wine, Beef mince, cherry tomatoes, onions, garlic, tomato sauce ',

                'image' => 'bolognese.jpg',

                'quantity' => '15',

                'price' => '9',

                'is_active' => '1',

            ],

            [

                'name' => 'Chicken',

                'restaurant_id' => '1',

                'description' => ' Sweet and Sour Chicken with crispy chicken, pineapple and bell peppers ',

                'image' => 'Sweet-and-Sour-Chicken.jpg',

                'quantity' => '12',

                'price' => '9.50',

                'is_active' => '1',

            ],

            [

                'name' => 'Steak',

                'restaurant_id' => '5',

                'description' => 'tomahawk rib-eye steak, salt',

                'image' => 'tomahawk-rib-eye-steak.jpg',

                'quantity' => '12',

                'price' => '60.50',

                'is_active' => '1',


            ],
            [

                'name' => 'Fried Rice',

                'restaurant_id' => '2',

                'description' => 'Fried rice in the wok with different flavers',

                'image' => 'fried-rice.jpg',

                'quantity' => '5',

                'price' => '10',

                'is_active' => '1',


            ],













            [

                'name' => 'Carbonara',

                'restaurant_id' => '2',

                'description' => 'Pasta of your choice, bacon, onions, cream, parmesan,',

                'image' => 'Carbonara.jpg',

                'quantity' => '19',

                'price' => '8.50',

                'is_active' => '1',


            ],
        ]);
    }
}
