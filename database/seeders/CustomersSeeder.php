<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CustomersSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ nếu có
        DB::table('Khachhang')->truncate();

        // Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

        // Thêm 50 dòng dữ liệu vào bảng 'quanlys'
        for ($i = 0; $i < 50; $i++) {
            DB::table('Khachhang')->insert([
                'DuongDanAnh' => $faker->imageUrl(),
                'TenKH' => $faker->name,
                'CCCD' => $faker->unique()->numerify('###############'),
                'NgaySinh' => $faker->date,
                'GioiTinh' => $faker->randomElement(['Nam', 'Nu']),
                'DiaChi' => $faker->address,
                'Email' => $faker->unique()->safeEmail,
                'SoDienThoai' => $faker->numerify('0#########'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);


        }

    }
}
