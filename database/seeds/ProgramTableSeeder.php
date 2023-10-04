<?php

namespace Database\Seeders;

use App\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
            "title"     => "MUST Capacity Building Programme",
            "slug"      => "proj-1",
            "body"      =>  "<p>The Malawi University of Science and Technology (MUST) is part of a consortium with Land O’Lakes Venture37 (formerly Land O’Lakes International Development), the University of Minnesota and Stellenbosch University, to establish the</p>",
            "image"     => "assets/images/prog1.png"
        ]);
        Program::create([
            "title"     => "Innovation Scholar Programme",
            "slug"      => "proj-2",
            "body"      =>  "<p>The ISP is a USAID Funded project that is being implemented by MUST in partnership with Lilongwe University of Science and Technology (LUANAR) and Michigan State University (MSU).</p>",
            "image"     => "assets/images/prog2.png"
        ]);
        Program::create([
            "title"     => "Junior INNV Talent Programme",
            "slug"      => "proj-3",
            "body"      =>  "<p>This component will be jointly implemented by National Commission for Science and Technology (NCST), Kamuzu Academy in collaboration with Press Trust and Ministry of Education Science and Technology (MoEST)</p>",
            "image"     => "assets/images/prog3.png"
        ]);
        Program::create([
            "title"     => "Center for Agricultural Innovation Programme",
            "slug"      => "proj-4",
            "body"      =>  "<p>The Malawi University of Science and Technology (MUST) is part of a consortium with Land O’Lakes Venture37 (formerly Land O’Lakes International Development), the University of Minnesota and Stellenbosch University, to establish the</p>",
            "image"     => "assets/images/prog4.png"
        ]);
        Program::create([
            "title"     => "Industrial Innovation Programme",
            "slug"      => "proj-5",
            "body"      =>  "<p>Innovation is a means to boost economic growth and social development. Industrialists are interested in creating innovation ecosystems that connect multiple innovation actors (e.g. universities, research institutes, business firms, etc.)</p>",
            "image"     => "assets/images/prog5.png"
        ]);
    }
}
