<?php

namespace Database\Seeders;

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
        DB::table('user')->insert([
            'email' => "abc@gmail.com",
            'password' => Hash::make('abc'),
            'name' => "Abc",
            "family_name" => "Alphabet",
            "age" => 20,
            "phone_number" => "081123456789",
            "location" => "Korea"
        ]);
        DB::table('user')->insert([
                'email' => "william@gmail.com",
                'password' => Hash::make('123'),
                'name' => "William",
                "family_name" => "Tanjaya",
                "age" => 20,
                "phone_number" => "081123456789",
                "location" => "Korea"
        ]);
    }
}
