<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AccountsSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ nếu có
        DB::table('TaiKhoan')->truncate();

        // Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

        // Thêm 50 dòng dữ liệu vào bảng 'taikhoans'
        for ($i = 0; $i < 50; $i++) {
            DB::table('TaiKhoan')->insert([
                'TenDangNhap' => $faker->userName,
                'MatKhau' => bcrypt($faker->password),
                'MaLoaiTK' => $faker->numberBetween(1, 3), // Giả sử MaLoaiTK là số nguyên từ 1 đến 3
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
