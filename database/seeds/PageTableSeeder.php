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
            'image_1'   => 'assets/images/homebg.png',
            'image_2'   => 'assets/images/homeabout.png',
            'image_3'   => 'assets/images/hsec3bg.jp',

            'contents'  => json_encode([
                'title1'        => 'Welcome To',
                'description1'  => '<p>MUST Institute of Industrial Research and Innovation</p>',
                'title2'        => 'ABOUT MIIRI',
                'description2'  => '<strong>MIIRI </strong>is moulded on the understanding that advancing development for the individual, the community and the nation requires the systematic investment in innovation and innovativeness from the vast resources bank within MUST and beyond MUST’s borders. As such, MIIRI takes a keen interest in seeking, developing and advancing innovative ideas through relevant industrial research .</p>',
                ]),
        ]);

        Page::create([
            'name'      => 'about-us',
            'image_1'   => 'assets/images/about1.png',
            'image_2'   => 'assets/images/bg-10.png',
            'image_3'   => 'assets/images/about-bg.png',

            'contents'  => json_encode([
                'title1'        => 'About MIIRI',
                'description1'  => '<p>"Empowering Economic Growth Through Research and Innovation"</p>',
                'title2'        => 'WHO IS MIIRI ',
                'description2'  => '<strong>Innovation Impact, Research Excellence, Next Generation Development, Support Innovation For Malawi</strong>',
                'title3'        => 'About Us',
                'description3'  => '<p>MIIRI is molded on the understanding that advancing development for the individual, the community, and the nation requires the systematic investment in innovation and innovativeness from the vast resources bank within MUST and beyond MUST’s borders. As such, MIIRI takes a keen interest in seeking, developing, and advancing innovative ideas through relevant industrial research. MIIRI is a leading innovation and commercialization hub supporting the industrialization pillar of the MW2063 agenda. MIIRI achieves this through offering practical solutions to emerging problems, particularly to the youth in most of the leading sectors, including .... </p>',
                'values'        => [
                    'vision'            => 'A modern and dynamic think-tank centre of excellence recognised for championing Science, Technology, Innovation (STI) for transformative industrialisation in Malawi.',
                    'mission'           => 'To accelerate transformative industrialisation in Malawi through human-centred and demand-driven industrial research, innovation, technology development and transfer.',
                    'key_principles'    => 'Partnerships · Excellence · Teamwork · Futuristic · Critical Thinking and Creativeness · Continuous Learning and Improvement · Back-Front-Back Mentorship',
                ],
                'people_and_society' => [
                    [
                        "title" => "Testimonials",
                        "body"  => "Please join us for the 7th Annual Finish Chelsea’s Run in honor of Chelsea King.",
                    ],
                    [
                        "title" => "Research Collaborators",
                        "body"  => "Please join us for the 7th Annual Finish Chelsea’s Run in honor of Chelsea King.",
                    ],
                    [
                        "title" => "Participation Opportunities",
                        "body"  => "Please join us for the 7th Annual Finish Chelsea’s Run in honor of Chelsea King.",
                    ],
                ],
                ]),
        ]);


    }
}
