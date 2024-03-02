<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatphongTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('datphong')->insert([
                'MaKH' => $faker->numberBetween(1, 50), // Assuming MaKH range from 1 to 50
                'MaPhong' => $faker->numberBetween(1, 50), // Assuming MaP range from 1 to 50
                'NgayDatPhong' => $faker->date,
                'NgayCheckIn' => $faker->date,
                'NgayCheckOut' => $faker->date,
                'SoNguoi' => $faker->numberBetween(1, 4),
                'TinhTrangDatPhong' => $faker->randomElement(['Reserved', 'CheckedIn', 'CheckedOut', 'Cancelled']),
                'TinhTrangThanhToan' => $faker->randomElement(['Paid', 'Unpaid']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

