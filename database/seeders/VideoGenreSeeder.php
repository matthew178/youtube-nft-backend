<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video_genre')->insert([
            'video_id' => "1",
            'genre_id' => "1"
        ]);
        DB::table('video_genre')->insert([
            'video_id' => "1",
            'genre_id' => "2"
        ]);
        DB::table('video_genre')->insert([
            'video_id' => "2",
            'genre_id' => "2"
        ]);
    }
}
