<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $categories = [
            ['cate_name' => 't-shirt'],
        	['cate_name' => 'Skinny Jean'],
        	['cate_name' => 'pleated skirt'],
        	['cate_name' => 'blazer'],
        	['cate_name' => 'sweatshirt'],
        	['cate_name' => 'Dress'],
        	['cate_name' => 'backpack'],
        ];
        DB::table('categories')->insert($categories);
    }
}
