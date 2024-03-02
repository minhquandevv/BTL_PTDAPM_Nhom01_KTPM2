<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PhongTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('phong')->insert([
                'TenPhong' => $faker->sentence(2),
                'GioiThieuPhong' => $faker->paragraph,
                'DonGia' => $faker->randomFloat(2, 50, 300),
                'TinhTrang' => $faker->randomElement(['Available', 'Booked', 'Maintenance']),
                'ViewHuongBien' => $faker->boolean,
                'CoBonTamNgoi' => $faker->boolean,
                'KichThuoc' => $faker->numberBetween(20, 50),
                'MaLoaiPhong' => $faker->numberBetween(1, 5), // Assuming MaLoaiPhong range from 1 to 5
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
