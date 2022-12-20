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
                'name' => 'Rojoada',
                'restaurant_id' => '2',
                'description' => 'Fried meat',
                'image' => 'roj.jpg',
                'quantity' => '5',
                'price' => '12',
                'is_active' => '1',

            ],
            [
                'name' => 'Tomyam Koong',
                'restaurant_id' => '2',
                'description' => 'Spicy Thai soup',
                'image' => 'tk.jpg',
                'quantity' => '6',
                'price' => '18',
                'is_active' => '1',

            ],
            [
                'name' => 'Beef noodles',
                'restaurant_id' => '2',
                'description' => 'Steamed beef, stir fried with noodle soup',
                'image' => 'beefnood.jpg',
                'quantity' => '14',
                'price' => '23',
                'is_active' => '1',

            ],
            [

                'name' => 'ShepherdsPie',

                'restaurant_id' => '4',

                'description' => 'minced lamb with potatoes and Worcestershire sauce',

                'image' => ' Shepherds-Pie.jpg',

                'quantity' => '14',

                'price' => '12.50',

                'is_active' => '1',

            ],

            [

                'name' => 'Chilli con carne',

                'restaurant_id' => '3',

                'description' => 'lean minced beef, 2 medium onions, 3 garlic cloves, hot chilli powder ',

                'image' => ' chilli.jpg',

                'quantity' => '10',

                'price' => '10',

                'is_active' => '1',

            ],

            [

                'name' => 'Tacos',

                'restaurant_id' => '3',

                'description' => 'Beef, Onion, Garlic, Chilli powder, Oregano ',

                'image' => ' tacos.jpg',

                'quantity' => '30',

                'price' => '8',

                'is_active' => '1',

            ],







            [

                'name' => 'Bolognese',

                'restaurant_id' => '2',

                'description' => 'Pasta of your choice, Red wine, Beef mince, cherry tomatoes, onions, garlic, tomato sauce ',

                'image' => ' bolognese.jpg',

                'quantity' => '15',

                'price' => '9',

                'is_active' => '1',

            ],

            [

                'name' => 'Sweet chicken',

                'restaurant_id' => '1',

                'description' => ' Sweet and Sour Chicken with crispy chicken, pineapple and bell peppers ',

                'image' => ' Sweet-and-Sour-Chicken.jpg',

                'quantity' => '12',

                'price' => '9.50',

                'is_active' => '1',

            ],

            [

                'name' => 'tomahawk steak',

                'restaurant_id' => '5',

                'description' => ' tomahawk rib-eye steak, salt',

                'image' => ' tomahawk-rib-eye-steak.jpg',

                'quantity' => '12',

                'price' => '60.50',

                'is_active' => '1',


            ],













            [

                'name' => 'Carbonara',

                'restaurant_id' => '2',

                'description' => ' Pasta of your choice, bacon, onions, cream, parmesan,',

                'image' => ' Carbonara.jpg',

                'quantity' => '19',

                'price' => '8.50',

                'is_active' => '1',


            ],
        ]);
    }
}
