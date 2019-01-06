<?php
use Illuminate\Database\Seeder;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $products = [];
        for($i = 0; $i < 100; $i++){
        	$item = [
        		'name' => $faker->name,
        		'image' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
        		'cate_id' => rand(7, 13),
        		'price' => rand(1000, 99999),
        		'short_desc' => $faker->realText($maxNbChars = 200, $indexSize = 1),
        		'detail' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        		'star' => rand(1, 5)
        	];
        	array_push($products, $item);
        }

        DB::table('products')->insert($products);
    }
}