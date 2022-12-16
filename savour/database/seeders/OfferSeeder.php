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
                'description' => 'Fried meat',
                'image' => 'roj.jpg',
                'quantity' => '5',
                'price' => '12',
                'is_active' => '1',
            ],
            [
                'name' => 'Tomyam Koong',
                'description' => 'Spicy Thai soup',
                'image' => 'tk.jpg',
                'quantity' => '6',
                'price' => '18',
                'is_active' => '1',
            ],
            [
                'name' => 'Beef noodles',
                'description' => 'Steamed beef, stir fried with noodle soup',
                'image' => 'beefnood.jpg',
                'quantity' => '14',
                'price' => '23',
                'is_active' => '1',
            ],
        ]);
    }
}
