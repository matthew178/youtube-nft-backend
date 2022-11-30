<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre')->insert([
            'genre_name' => "Art",
            'genre_desc' => "Art is a fashion that drawn in pictures"
        ]);
        DB::table('genre')->insert([
            'genre_name' => "Game",
            'genre_desc' => "This genre contains many game that populer"
        ]);
        DB::table('genre')->insert([
            'genre_name' => "Crypto",
            'genre_desc' => "This genre contains cryptocurrency etc"
        ]);
    }
}
