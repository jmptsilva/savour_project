<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'user_id' => '2',
                
                'is_closed' => '1',
                
                ],
                [
                'user_id' => '15',
                
                'is_closed' => '1',
                
                ],
                [
                
                'user_id' => '3',
                'is_closed' => '0',
                
                ],
                [
                'user_id' => '1',
                
                'is_closed' => '1',
                
                ],
                [
                
                'user_id' => '5',
                
                'is_closed' => '1',
                ],
                [
                
                'user_id' => '12',
                
                'is_closed' => '0',
                
                ],
                [
                
                'user_id' => '11',
                
                'is_closed' => '1',
                
                ],
                [
                
                'user_id' => '13',
                
                'is_closed' => '0',
                
                ],
                [
                
                'user_id' => '14',
                
                'is_closed' => '1',
                
                ],
                [
                'user_id' => '15',
                
                'is_closed' => '1',
                
                ],
                [
                'user_id' => '4',
                
                'is_closed' => '1',
                
                ]
                ]);
    }
}
