<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DichvuPhongTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('dichvu_phong')->insert([
                'MaPhong' => $faker->numberBetween(1, 50), // Assuming MaPhong range from 1 to 50
                'MaDichVu' => $faker->numberBetween(1, 50), // Assuming MaDichVu range from 1 to 50
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
