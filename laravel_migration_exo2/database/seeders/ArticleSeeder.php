<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->insert([
            "autor"=>"antoine",
            "date"=>"1992-10-03",
            "commentaire"=> "Je suis un comen"
        ]);
        DB::table("articles")->insert([
            "autor"=>"Pierre",
            "date"=>"1992-10-03",
            "commentaire"=> "Je suis un come"
        ]);
        DB::table("articles")->insert([
            "autor"=>"Yassmi",
            "date"=>"1992-10-03",
            "commentaire"=> "Je suis un com"
        ]);
        DB::table("articles")->insert([
            "autor"=>"sai",
            "date"=>"1992-10-03",
            "commentaire"=> "Je suis un co"
        ]);
        DB::table("articles")->insert([
            "autor"=>"mahad",
            "date"=>"1992-10-03",
            "commentaire"=> "Je suis un c"
        ]);
    }
}
