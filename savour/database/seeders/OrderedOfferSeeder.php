<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderedOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordered_offers')->insert([
            [

                'order_id' => '3',
                
                'offer_id' => '3',
                
                'quantity' =>'2' ,
                
                'price' => '16',
                
                ],
                
                [
                
                'order_id' => '1',
                
                'offer_id' => '2',
                
                'quantity' =>'3' ,
                
                'price' => '30',
                
                ],
                [
                
                'order_id' => '9',
                
                'offer_id' => '7',
                
                'quantity' =>'2' ,
                
                'price' => '20',
                
                ],
                [
                
                'order_id' => '7',
                
                'offer_id' => '3',
                
                'quantity' =>'2' ,
                
                'price' => '16',
                
                ],
                [
                
                'order_id' => '6',
                
                'offer_id' => '4',
                
                'quantity' =>'2' ,
                
                'price' => '18',
                
                ],
                [
                
                'order_id' => '7',
                
                'offer_id' => '3',
                
                'quantity' =>'5' ,
                
                'price' => '40',
                
                ],
        ]);
    }
}
