<?php

namespace Database\Seeders;

use App\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            "title"     => "Business Accerelation for the Youth(BA4Y)",
            "slug"      => Str::slug("Business Accerelation for the Youth(BA4Y)"),
            "body"      =>  "<p>The Malawi University of Science and Technology (MUST) in collaboration with Alliance Biodiversity and CIAT are implementing a Business Acceleration for Youth (BA4Y) Programme in Thyolo District with support from USAID Malawi.</p>",
            "image"     => "assets/images/proj1.png"
        ]);

        Project::create([
            "title"     => "FoSTA-Health Project",
            "slug"      => Str::slug("FoSTA-Health Project"),
            "body"      =>  "<p>The project focus is on evaluating the One Health implications of food systems transformation in Malawi, South Africa, Tanzania and Zambia.</p>",
            "image"     => "assets/images/proj3.png"
        ]);

        Project::create([
            "title"     => "PEER Project",
            "slug"      => Str::slug("PEER Project"),
            "body"      =>  "<p></p>",
            "image"     => "assets/images/proj5.png"
        ]);

        Project::create([
            "title"     => "BHEARD Project",
            "slug"      => Str::slug("BHEARD Project"),
            "body"      =>  "<p></p>",
            "image"     => "assets/images/proj2.png"
        ]);
    }
}
