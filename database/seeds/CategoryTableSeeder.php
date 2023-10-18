<?php

namespace Database\Seeders;

use App\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            "name" => "Academics"
        ]);
        Category::create([
            "name" => "Entertainment"
        ]);
    }
}
