<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Tạo dữ liệu giả cho bảng "KhachHang"
        foreach (range(1, 50) as $index) {
            DB::table('Khachhang')->insert([
                'TenKH' => $faker->name,
                'CCCD' => $faker->regexify('[0-9]{9}'),
                'NgaySinh' => $faker->date($format = 'Y-m-d', $max = '2000-01-01'),
                'GioiTinh' => $faker->randomElement(['Nam', 'Nữ']),
                'DiaChi' => $faker->address,
                'Email' => $faker->unique()->safeEmail,
                'img' => $faker->imageUrl($width = 640, $height = 480),
                'SoDienThoai' => $faker->phoneNumber,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
