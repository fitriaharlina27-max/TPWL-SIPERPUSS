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
     */
    public function run(): void
    {
        DB::table ('users')->insert([
            'username' => 'Aboyy',
            'first_name' => 'boy23',
            'last_name' => 'anjay',
            'email' =>'Bbaoy@gamil.com',
            'password' => Hash :: make('password'),
        ]
        );
        //
    }
}
