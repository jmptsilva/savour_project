<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergenicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allergenics')->insert([
            [
                'name' => 'Celery',
            ],
            [
                'name' => 'Crustaceans',
            ],
            [
                'name' => 'Egg',
            ],
            [
                'name' => 'Fish',
            ],
            [
                'name' => 'Gluten',
            ],
            [
                'name' => 'Lupin',
            ],
            [
                'name' => 'Milk',
            ],
            [
                'name' => 'Moluscs',
            ],
            [
                'name' => 'Mustard',
            ],
            [
                'name' => 'Nuts',
            ],
            [
                'name' => 'Peanut',
            ],
            [
                'name' => 'Sesame',
            ],
            [
                'name' => 'Soya',
            ],
            [
                'name' => 'Sulphites',
            ]
        ]);
    }
}
