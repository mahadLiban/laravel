<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" =>"Elias",
            "email" => "elias@molengeek.com",
            "password"=>"test12",


        ]);
        DB::table('users')->insert([
            "name" =>"nico",
            "email" => "nico@molengeek.com",
            "password"=>"test11",


        ]);
        DB::table('users')->insert([
            "name" =>"Mahad",
            "email" => "Mahad@molengeek.com",
            "password"=>"test32",


        ]);
    }
}
