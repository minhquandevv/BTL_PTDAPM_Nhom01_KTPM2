<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AccountTypeSeeder extends Seeder
{
    public function run()
    {
        // Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

        // Xóa dữ liệu cũ nếu có
        DB::table('LoaiTaiKhoan')->truncate();

        // Thêm 50 dòng dữ liệu vào bảng 'loaitaikhoans'
        for ($i = 0; $i < 50; $i++) {
            DB::table('LoaiTaiKhoan')->insert([
                'TenLoaiTK' => $faker->randomElement(['QuanLy', 'NhanVien', 'KhachHang']),
            ]);
        }
    }
}
