<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate 10 sample records
        for ($i = 1; $i <= 100; $i++) {
            DB::table('PHONG')->insert([
                'TenPhong' => $faker->word,
                'GioiThieuPhong' => $faker->paragraph,
                'DonGia' => $faker->randomFloat(2, 50, 500),
                'TinhTrang' => $faker->randomElement(['Available', 'Occupied', 'Under Maintenance']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
