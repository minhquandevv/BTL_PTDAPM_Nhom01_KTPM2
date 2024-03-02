<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DanhgiaNhanxetTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('danhgia_nhanxet')->insert([
                'MaDatPhong' => $faker->numberBetween(1, 50), // Assuming MaDatPhong range from 1 to 50
                'DiemDanhGia' => $faker->numberBetween(1, 5),
                'NhanXet' => $faker->paragraph,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

