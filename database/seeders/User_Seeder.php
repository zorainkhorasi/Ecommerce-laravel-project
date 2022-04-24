<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // APKEY PASSWORD KO DECODE KAR KE SEND KARAY GI
class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            "name"=>"ali",
            "email"=>"ali@gmail.com",
            "password"=>Hash::make('12345'),

        ]);
    }
}
