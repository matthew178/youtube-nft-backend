<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video_tag')->insert([
            'video_id' => "1",
            'tag_id' => "1"
        ]);
        DB::table('video_tag')->insert([
            'video_id' => "1",
            'tag_id' => "2"
        ]);
        DB::table('video_tag')->insert([
            'video_id' => "2",
            'tag_id' => "2"
        ]);
    }
}
