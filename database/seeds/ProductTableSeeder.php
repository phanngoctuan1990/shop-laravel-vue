<?php

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [];
        $faker = Faker::create();
        $images = DB::table('images')->get();
        foreach ($images as $image) {
            $products[] = [
                'name' => $faker->name,
                'image_id' => $image->id,
                'description' => $faker->realText(20),
                'details' => $faker->realText(200),
                'price' => $faker->randomNumber(4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }
        DB::table('products')->insert($products);
    }
}
