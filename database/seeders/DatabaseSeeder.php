<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GenreSeeder::class,
            TagSeeder::class,
            UserSeeder::class,
            VideoGenreSeeder::class,
            VideoSeeder::class,
            VideoTagSeeder::class
        ]);
        // $this->call('UsersTableSeeder');
    }
}
