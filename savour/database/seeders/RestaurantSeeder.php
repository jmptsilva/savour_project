<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            [
                'name' => 'Bonito Afonso',
                'email' => 'bonito@mail.com',
                'password' => Hash::make('Qw12345678'),
                'phone_number' => '67326365',
                'city'=>'Lisboa',
                'address' => 'Rue de Belval, 72',
                'postal_code' => '1234',
            ],
            [
                'name' => 'Jay\'s Thai Kitchen',
                'email' => 'jthaikitchen@mail.com',
                'password' => Hash::make('Qw12345678'),
                'phone_number' => '635352',
                'city'=>'Bangkok',
                'address' => 'Rua dos Lavajões, 14',
                'postal_code' => '3838',
            ],
            [
                'name' => 'Formosa',
                'email' => 'formosa@mail.com',
                'password' => Hash::make('Qw12345678'),
                'phone_number' => '63253424',
                'city'=>'Taipei',
                'address' => 'Rue de Taiwan, 7',
                'postal_code' => '6754',
            ],
            [
                'name' => 'Whicher Dinner',
                'email' => 'whicherdinner@mail.com',
                'password' => Hash::make('Qw12345678'),
                'phone_number' => '6352422',
                'city'=>'London',
                'address' => 'Rue de Manchester, 88',
                'postal_code' => '1373',
            ],
            [
                'name' => 'João\'s Beans',
                'email' => 'joaobeans@mail.com',
                'password' => Hash::make('Qw12345678'),
                'phone_number' => '63532422',
                'city'=>'Aveiro',
                'address' => 'Rue de Pereiras, 56',
                'postal_code' => '4637',
            ],
        ]);
    }
}
