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
            "nom"=> 'la Crypto en chute',
            "img"=> 'Tu seras une image',
            "description"=> 'Il faut sacoir que la crypto est en chute',
            "categorie"=> 'la Crypto en chute',
            "nda"=> 'Mahad Liban',
            "ddp"=> '2021-05-24',
        ]);

        DB::table("articles")->insert([
            "nom"=> 'la Crypto en chute',
            "img"=> 'Tu seras une image',
            "description"=> 'Il faut sacoir que la crypto est en chute',
            "categorie"=> 'la Crypto en chute',
            "nda"=> 'Mahad Liban',
            "ddp"=> '2021-05-24',
        ]);
    }
}
