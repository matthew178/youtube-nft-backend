<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video')->insert([
            'video_title' => "NFT 1",
            'video_desc' => "This is my first NFT. Check it out!",
            'video_type' => "VIDEO",
            "is_nft" => 1,
            "views_count" => 102,
            "video_duration" => "03.50",
            "video_path_url" => "www.google.com",
            "thumbnail_path_url" => "www.images.com",
            "user_id" => "1"
        ]);
        DB::table('video')->insert([
            'video_title' => "Short NFT 1",
            'video_desc' => "This is my first short video. Check it out!",
            'video_type' => "SHORT_CLIP",
            "is_nft" => 0,
            "nft_pricing" => 21.2,
            "views_count" => 80,
            "video_duration" => "12.10",
            "video_path_url" => "www.google.com",
            "thumbnail_path_url" => "www.images.com",
            "user_id" => "1"
        ]);
    }
}
