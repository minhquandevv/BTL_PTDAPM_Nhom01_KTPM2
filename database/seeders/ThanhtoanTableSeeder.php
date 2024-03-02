<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ThanhtoanTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('thanhtoan')->insert([
                'MaDatPhong' => $faker->numberBetween(1, 50), // Assuming MaDatPhong range from 1 to 50
                'NgayThanhToan' => $faker->date,
                'TongTien' => $faker->randomFloat(2, 100, 1000),
                'PhuongThucThanhToan' => $faker->randomElement(['Cash', 'Credit Card', 'Bank Transfer']),
                'TinhTrangThanhToan' => $faker->randomElement(['Paid', 'Unpaid']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
