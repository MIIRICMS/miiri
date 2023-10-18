<?php

namespace Database\Seeders;

use App\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            "image"         => "assets/images/news/owen.png",
            "title"         => "MUST student releases gospel album",
            "slug"          => Str::slug("MUST student releases gospel album"),
            "body"          => "<p>One of the fastest rising stars in Malawi and a Musicology student at the Malawi University of Science and Technology</p>",
            "date"          => Carbon::createFromDate(2023,8,6)->getTimestamp(),
            "category_id"   => 2,
            "user_id"       => 1,
        ]);

        News::create([
            "image"         => "assets/images/news/gala.jpg",
            "title"         => "MUST graduates 560 during 3rd Congregation",
            "slug"          => Str::slug("MUST graduates 560 during 3rd Congregation"),
            "body"          => "<p>The Malawi University of Science and Technology (MUST) on June 29, 2023 awarded 560 students with certificates, diplomas and degrees </p>",
            "date"          => Carbon::createFromDate(2022,6,11)->getTimestamp(),
            "category_id"   => 1,
            "user_id"       => 1,
        ]);

        News::create([
            "image"         => "assets/images/news/gala.jpg",
            "title"         => "MUST graduates 410 during 4th Congregation",
            "slug"          => Str::slug("MUST graduates 410 during 4th Congregation"),
            "body"          => "<p>The Malawi University of Science and Technology (MUST) on August 11, 2023 awarded 410 students with certificates, diplomas and degrees </p>",
            "date"          => Carbon::createFromDate(2023,8,11)->getTimestamp(),
            "category_id"   => 1,
            "user_id"       => 1,
        ]);
    }
}
