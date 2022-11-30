<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag')->insert([
            'tag_name' => "Art",
            'tag_desc' => "Art is a fashion that drawn in pictures"
        ]);
        DB::table('tag')->insert([
            'tag_name' => "Game",
            'tag_desc' => "This tag contains many game that populer"
        ]);
        DB::table('tag')->insert([
            'tag_name' => "Crypto",
            'tag_desc' => "This tag contains cryptocurrency etc"
        ]);
    }
}
