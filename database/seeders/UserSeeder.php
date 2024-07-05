<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            [
                "name" => "admin",
                "role" => "admin",
                "email" => "admin@gmail.com",
                "password" => \Hash::make('password')
            ],
            [
                "name" => "user",
                "role" => "user",
                "email" => "user@gmail.com",
                "password" => \Hash::make('password')
            ],
        ]);
    }
}
