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
            'image_3'   => 'assets/images/hsec3bg.jpg',

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
                'description3'  => '<p>MIIRI is molded on the understanding that advancing development for the individual, the community, and the nation requires the systematic investment in innovation and innovativeness from the vast resources bank within MUST and beyond MUST’s borders. As such, MIIRI takes a keen interest in seeking, developing, and advancing innovative ideas through relevant industrial research.</p>
<p>MIIRI is a leading innovation and commercialization hub supporting the industrialization pillar of the MW2063 agenda. MIIRI achieves this through offering practical solutions to emerging problems, particularly to the youth in most of the leading sectors, including agriculture and tourism. MIIRI has been working on many projects focusing on innovation prototype development, incubation service delivery for the youth through the application of tested business development models, industrial participation and commercialization of innovations, and mentorship programs.</p>
<p>The Centre was established under MUST to sport job creation efforts and poverty reduction by providing expert-backed and impactful interventions to MSMEs and youthful innovators as guided by the MW2063 agenda. The Centre has unparalleled experience in ecosystem development, cultural and tourism research, Agri-Tech innovations, and incubation service provision. The Centre is composed of well-qualified Malawian nationals who understand challenges faced by MSMEs and the application of Emerging Technologies to youth and women challenges in the agriculture and tourism sectors.</p>',
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

        Page::create([
            'name'      => 'research-and-innovations',
            'image_1'   => 'assets/images/group 1.png',
            'image_2'   => 'assets/images/researchcuriosity.png',
            'image_3'   => 'assets/images/innovationvideo.png',

            'contents'  => json_encode([
                'title1'        => 'Research and Innovation',
                'description1'  => '',
                'title2'        => 'RESEARCH',
                'description2'  => '<p>Every great research project begins with a curiosity-driven question.</p>',
                'title3'        => 'INNOVATION LEADER',
                'description3'  => '<p>Embrace the spark of innovation that resides within you, for it holds the power to illuminate uncharted paths and revolutionize the world around you.</p>',
                ]),
        ]);


    }
}
