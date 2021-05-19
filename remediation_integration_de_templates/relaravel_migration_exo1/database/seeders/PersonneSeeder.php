<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("personnes")->insert([
            "name"=>"Mahad",
            "age"=>26,
            "ddn"=>"1994-11-09",
            "created_at"=>now()
        ]);
    }
}
