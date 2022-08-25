<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        //Variable that hold all the catgegories
        $categories = [];

        foreach (range(1, 5) as $index) {
            $categories[] = [
                'name' => $faker->text(20),
                'created_at' => now(),
                'updated_at' => now(),

            ];
        }

        DB::table('categories')->insert($categories);
    }
}
