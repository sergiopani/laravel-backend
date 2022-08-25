<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $products = [];

        foreach (range(1, 20) as $index) {
            $products[] = [
                'name' => $faker->sentence(),
                'price' => $faker->randomDigitNot(0) * 100,
                'category_id' => rand(3, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        };

        DB::table('products')->insert($products);
    }
}
