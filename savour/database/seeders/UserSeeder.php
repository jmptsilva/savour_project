<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Christopher',
                'last_name' => 'Owens',
                'email' => 'facilisis@icloud.edu',
                'password' => Hash::make('Qw12345678'),

            ],
            [
                'first_name' => 'Leila',
                'last_name' => 'Dominguez',
                'email' => 'inceptos.hymenaeos@aol.couk',
                'password' => Hash::make('Qw12345678'),
            ],
            [
                'first_name' => 'Travis',
                'last_name' => 'Wiggins',
                'email' => 'tellus@icloud.ca',
                'password' => Hash::make('Qw12345678'),
            ],
            [
                'first_name' => 'Anjolie',
                'last_name' => 'Guthrie',
                'email' => 'orci@protonmail.net',
                'password' => Hash::make('Qw12345678'),
            ],
            [
                'first_name' => 'Harlan',
                'last_name' => 'Hunt',
                'email' => 'erat@icloud.com',
                'password' => Hash::make('Qw12345678'),
            ],
            [
                'first_name' => 'Wynter',
                'last_name' => 'Cameron',
                'email' => 'wync@mail.com',
                'password' => Hash::make('Qw12345678'),
            ],
            [
                'first_name' => 'Kay',
                'last_name' => 'Hurley',
                'email' => 'hurley@mail.com',
                'password' => Hash::make('Qw12345678'),
            ],
            [
                'first_name' => 'Gareth',
                'last_name' => 'Mcintosh',
                'email' => 'mcintosh@mail.com',
                'password' => Hash::make('Qw12345678'),
            ],
            [
                'first_name' => 'Berk',
                'last_name' => 'Downs',
                'email' => 'downs@mail.com',
                'password' => Hash::make('Qw12345678'),
            ],
            [
                'first_name' => 'Piper',
                'last_name' => 'Dejesus',
                'email' => 'piper@mail.com',
                'password' => Hash::make('Qw12345678'),
            ],
            [
                'first_name' => 'Hashim',
                'last_name' => 'Gould',
                'email' => 'dolor.dolor.tempus@icloud.couk',
                'password' => Hash::make('Qw12345678'),
            ],
            [
                'first_name' => 'Kiayada',
                'last_name' => 'House',
                'email' => 'proin.non@icloud.org',
                'password' => Hash::make('Qw12345678'),
            ],
            [
                'first_name' => 'Keefe',
                'last_name' => 'Riddle',
                'email' => 'duis.gravida.praesent@aol.com',
                'password' => Hash::make('Qw12345678'),
            ],
            [
                'first_name' => 'Camden',
                'last_name' => 'Johnston',
                'email' => 'nam.ligula@icloud.org',
                'password' => Hash::make('Qw12345678'),
            ],
            [
                'first_name' => 'Rebecca',
                'last_name' => 'Briggs',
                'email' => 'congue.elit.sed@icloud.net',
                'password' => Hash::make('Qw12345678'),
            ]
        ]);
    }
}
