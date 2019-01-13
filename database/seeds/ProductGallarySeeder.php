<?php

use Illuminate\Database\Seeder;

class ProductGallarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $images = [];
        $listProducts = Product::all();
        foreach($listProducts as $item){
            $numberImg = rand(3, 5);
            for($i = 0; $i < $numberImg; $i++){
                $el = [
                    'img_url' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
                    'product_id' => $item->id
                ];
                $images[] = $el;
            }
        }
        DB::table('product_galleries')->insert($images);
    }
}
