<?php

namespace Database\Seeders;

use App\Publication;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publication::create([
            "date"      => Carbon::createFromDate(2019,11,11)->getTimestamp(),
            "title"     => "Implication of Sensory Evaluation and Quality Assessment in Food Product Development: a Review",
            "slug"      => Str::slug("Implication of Sensory Evaluation"),
            "body"      => "<p>The quality of food products is determined by physical properties, chemical composition, the level of contaminants (microbiological and toxic substances) and sensory attributes</p>",
            "file"      => "assets/publications/Implication of Sensory Evaluation.pdf",
        ]);
        Publication::create([
            "date"      => Carbon::createFromDate(2021,5,14)->getTimestamp(),
            "title"     => "Nutrients Content and Antioxidant Potential of Selected Traditional Vegetables Grown in Malawi",
            "slug"      => Str::slug("Nutrients Content and Antioxidant Potential of Selected"),
            "body"      => "<p>Vegetables provide nutrients, especially minerals and vitamins, and non-nutrient phytochemicals with health benefits. Iron, zinc and vitamin A deficiencies are common in most developing countries yet traditional vegetables</p>",
            "file"      => "assets/publications/Nutrients Content and Antioxidant Potential.pdf",
        ]);
        Publication::create([
            "date"      => Carbon::createFromDate(2022,10,27)->getTimestamp(),
            "title"     => "Calcium content, in vitro digestibility, and bioaccessibility in leaves of spinach (Spinacia oleracea), sweet potato (Ipomea batatas), and drumstick tree (Moringa oleifera) [version 1; peer review: 3 approved with reservations]",
            "slug"      => Str::slug("Calcium content, in vitro digestibility, and bioaccessibility in leaves of"),
            "body"      => "<p>Low calcium intake, poor calcium absorption, excessive calcium losses, or some combination of these factors contribute to calcium deficiency diseases. Calcium insufficiency </p>",
            "file"      => "assets/publications/Calcium content in vitro digestibility and bioaccessibility.pdf",
        ]);
        Publication::create([
            "date"      => Carbon::createFromDate(2023,1,1)->getTimestamp(),
            "title"     => "What is the evidence that gender affects access to and use of forest assets for food security? A systematic map protocol",
            "slug"      => Str::slug("What is the evidence that gender affects access to and use of forest assets for food security"),
            "body"      => "<p>There is increasing awareness of the importance of gender in natural resource management. Especially for communities dependent upon forests for their livelihoods, gender roles and relations can affect access to forest resources, income and food generating activities. As a consequence, gender</p>",
            "file"      => "assets/publications/s13750-016-0080-9.pdf",
        ]);
        Publication::create([
            "date"      => Carbon::createFromDate(2019,11,11)->getTimestamp(),
            "title"     => "The Demography of Adaptation to Climate Change",
            "slug"      => Str::slug("The Demography of Adaptation to Climate Change"),
            "body"      => "<p>Growing awareness that the impacts of climate change on human populations are imminent, as well as potentially devastating, has prodded some policymakers and most of the scientific community to call for more effective action. Deepening alarm</p>",
            "file"      => "assets/publications/s13750-016-0080-9.pdf",
        ]);
    }
}
