<?php

namespace Database\Seeders;

use App\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::create([
           "name"           => "General",
           "description"    => "",
           "images"         => json_encode([
               "assets/images/homegallery1.jpg",
               "assets/images/homegallery2.jpg",
               "assets/images/homegallery3.jpg",
               "assets/images/homegallery4.jpg",
               "assets/images/homegallery5.jpg",
               "assets/images/homegallery6.jpg",
           ]),
        ]);
    }
}
