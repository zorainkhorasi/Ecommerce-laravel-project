<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(

            
            [
        
               "name"=>"LG 123Mobile",
                "price"=>"40000",
                "description"=>"smart phone with 4gb ram and 256 hard drive",
                "category"=>"mobile",
                "gallery"=>"https://5.imimg.com/data5/SELLER/Default/2021/6/UF/BO/CG/33145661/oppo-f19-6-128gb-250x250.jpg",
        ],
        [

            "name"=>"LG 123Mobile",
            "price"=>"40000",
            "description"=>"smart phone with 4gb ram and 256 hard drive",
            "category"=>"mobile",
            "gallery"=>"https://5.imimg.com/data5/SELLER/Default/2021/6/UF/BO/CG/33145661/oppo-f19-6-128gb-250x250.jpg",
        ],
        
        
    );
    }
}
