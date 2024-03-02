<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LoaiphongTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('loaiphong')->insert([
                'TenLoaiPhong' => $faker->word,
                'MoTa' => $faker->paragraph,
                'SoNguoiToiDa' => $faker->numberBetween(1, 4),
                'SoGiuong' => $faker->numberBetween(1, 2),
                'SoPhongTam' => $faker->numberBetween(1, 2),
                'WifiMienPhi' => $faker->boolean,
                'TVTrongPhong' => $faker->boolean,
                'DienTichBalcon' => $faker->numberBetween(5, 20),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
