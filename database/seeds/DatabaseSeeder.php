<?php

use Database\Seeders\AlbumTableSeeder;
use Database\Seeders\CategoryTableSeeder;
use Database\Seeders\NewsTableSeeder;
use Database\Seeders\PageTableSeeder;
use Database\Seeders\ProgramTableSeeder;
use Database\Seeders\UserTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PageTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(ProgramTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(NewsTableSeeder::class);
         $this->call(AlbumTableSeeder::class);
    }
}
