<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimauxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("animaux")->insert([
            "nom"=>"Pierre",
            "espece"=>"chat",
            "age"=> 44,
            "ddn"=>"1994-11-09"
        ]);
        DB::table("animaux")->insert([
            "nom"=>"Bella",
            "espece"=>"rat",
            "age"=> 4,
            "ddn"=>"1994-11-09"
        ]);
        DB::table("animaux")->insert([
            "nom"=>"rex",
            "espece"=>"Dino",
            "age"=> 23,
            "ddn"=>"1994-11-09"
        ]);
       
    }
}
