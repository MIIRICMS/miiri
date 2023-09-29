<?php

namespace Database\Seeders;

use App\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'name'      => 'home',
            'contents'  => json_encode([
                'title1'        => 'Welcome To',
                'description1'  => '<p>MUST Institute of Industrial Research and Innovation</p>',
                'title2'        => 'ABOUT MIIRI',
                'description2'  => '<p>MIIRI is moulded on the understanding that advancing development for the individual, the community and the nation requires the systematic investment in innovation and innovativeness from the vast resources bank within MUST and beyond MUST’s borders. As such, MIIRI takes a keen interest in seeking, developing and advancing innovative ideas through relevant industrial research .</p>',
            ]),
        ]);
    }
}
