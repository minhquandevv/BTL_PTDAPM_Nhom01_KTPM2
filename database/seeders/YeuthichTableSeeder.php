<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class YeuthichTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('yeuthich')->insert([
                'MaKH' => $faker->numberBetween(1, 50), // Assuming MaKH range from 1 to 50
                'MaP' => $faker->numberBetween(1, 50), // Assuming MaP range from 1 to 50
                'NgayThemVao' => $faker->date,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
