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
            'image_1'   => 'assets/images/participationbg.jpg',
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

        Page::create([
            'name'      => 'team',
            'image_1'   => 'assets/images/bg-team.jpg',
            'image_2'   => '',
            'image_3'   => '',

            'contents'  => json_encode([
                [
                    'name'      => 'Professor David Dalison Mkwambisi',
                    'title'     => 'Director of MIIRI',
                    'image'     => 'assets/images/team-1.png',
                ],
                [
                    'name'      => 'Dr. Tabitha Nindi',
                    'title'     => 'Research Fellow and Science Tech',
                    'image'     => 'assets/images/team-2.png',
                ],
                [
                    'name'      => 'Dr. Edda Lungu',
                    'title'     => 'Post Doc. Fellow - Food and Nutrition',
                    'image'     => 'assets/images/team-3.png',
                ],
                [
                    'name'      => 'Dr. Joseph Issa',
                    'title'     => 'Research Fellow and Science Tech',
                    'image'     => 'assets/images/team-4.png',
                ],
                [
                    'name'      => 'Wongani Langa',
                    'title'     => 'Research Fellow - Technology and Innovations',
                    'image'     => 'assets/images/team-5.png',
                ],
                [
                    'name'      => 'Zalerapi Mhango',
                    'title'     => 'Research Fellow - Technology and Innovations',
                    'image'     => 'assets/images/team-6.png',
                ],
                [
                    'name'      => 'Emmanuel Likoya',
                    'title'     => 'Post Doc. Fellow - Food and Nutrition',
                    'image'     => 'assets/images/team-7.jpg',
                ],
                [
                    'name'      => 'Patrick Chimseu',
                    'title'     => 'Projects Officer',
                    'image'     => 'assets/images/team-8.png',
                ],
                [
                    'name'      => 'Esther Chole',
                    'title'     => 'Secretary',
                    'image'     => 'assets/images/team-9.jpg',
                ],
            ]),
        ]);

        Page::create([
            'name'      => 'partners',
            'image_1'   => 'assets/images/partners_bg.png',
            'image_2'   => '',
            'image_3'   => '',

            'contents'  => json_encode([
                'title1'        => 'Partners',
                'description1'  => '',
                'title2'        => 'Find out More about or Partnerships',
                'description2'  => '<p>At MIIRI, we believe that innovation knows no boundaries. Our commitment to pushing the boundaries of knowledge and creating real-world impact drives us to seek dynamic collaborations with organizations and individuals who share our vision.</p>',
                'title3'        => '',
                'description3'  => '',
                'partners'      => [
                    [
                        'name'          => 'NCST',
                        'description'   => 'The National Council for Science and Technology',
                        'image'         => 'assets/images/NCST.png',
                    ],
                    [
                        'name'          => 'CAT',
                        'description'   => 'The Centre for Agriculture Transformation',
                        'image'         => 'assets/images/cat.png',
                    ],
                    [
                        'name'          => 'USAID',
                        'description'   => 'United States Agency for International Development',
                        'image'         => 'assets/images/USAID.png',
                    ],
                    [
                        'name'          => 'CARE',
                        'description'   => 'The Cooperative for Assistance and Relief Everywhere is one of the',
                        'image'         => 'assets/images/CARE.png',
                    ],
                    [
                        'name'          => 'FSNet',
                        'description'   => 'The Food Systems Research Networks for Africa',
                        'image'         => 'assets/images/FSNet.png',
                    ],
                    [
                        'name'          => 'MSU',
                        'description'   => 'The Michigan State University',
                        'image'         => 'assets/images/MSU.png',
                    ],
                    [
                        'name'          => 'UNC',
                        'description'   => 'The University of North Carolin',
                        'image'         => 'assets/images/unc.png',
                    ],
                    [
                        'name'          => 'University of Minnesota',
                        'description'   => 'The University of Minnesota',
                        'image'         => 'assets/images/UoM.png',
                    ],
                    [
                        'name'          => 'Stellenbosch University',
                        'description'   => 'The Stellenbosch University',
                        'image'         => 'assets/images/Stellenbosch.png',
                    ],
                    [
                        'name'          => 'Mzuzu University (MZUNI)',
                        'description'   => 'The Mzuzu University',
                        'image'         => 'assets/images/Mzuni.png',
                    ],
                    [
                        'name'          => 'TEVETA',
                        'description'   => 'The Technical, Entrepreneurial and Vocational Education and Training (TEVET) Authority (TEVETA)',
                        'image'         => 'assets/images/Teveta.png',
                    ],
                    [
                        'name'          => 'Press Trust',
                        'description'   => 'It is one of the',
                        'image'         => 'assets/images/Press trust.png',
                    ],
                    [
                        'name'          => 'Mikolongwe School of Veterinary Sciences',
                        'description'   => 'The Mikolongwe ',
                        'image'         => 'assets/images/MK.png',
                    ],
                    [
                        'name'          => 'M-Hub',
                        'description'   => '',
                        'image'         => 'assets/images/mhub.png',
                    ],
                    [
                        'name'          => 'Kamuzu Academy (KA)',
                        'description'   => 'Kamuzu Acadamy is part of the',
                        'image'         => 'assets/images/KA.png',
                    ],
                    [
                        'name'          => 'University of Botswana (UOB)',
                        'description'   => 'The University of Botswana',
                        'image'         => 'assets/images/UoB.png',
                    ],
                    [
                        'name'          => 'Thyolo District Council',
                        'description'   => 'As on of the most',
                        'image'         => 'assets/images/MK.png',
                    ],


                ]
            ]),
        ]);


    }
}
