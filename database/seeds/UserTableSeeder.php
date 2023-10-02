<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name'   => "Patrick Chimseu",
           'email'  => "pchimseu@luanar.ac.mw",
           'password'  => bcrypt("12345678"),
        ]);
    }
}
