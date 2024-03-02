<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LienheTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('lienhe')->insert([
                'Email' => $faker->unique()->safeEmail,
                'SoDT' => $faker->phoneNumber,
                'MaNV' => $faker->numberBetween(1, 50), // Assuming MaNV range from 1 to 50
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
