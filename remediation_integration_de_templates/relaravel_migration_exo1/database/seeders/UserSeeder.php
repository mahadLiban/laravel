<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "Mahad", 
            "email" => "mahad.l@outlook.be",
            "password" => "testtest",
            "created_at"=>now()

        ]);
        DB::table("users")->insert([
            "name" => "Elias", 
            "email" => "elias.l@outlook.be",
            "password" => "eliasss",
            "created_at"=>now()
        ]);
    }
}
