<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeesSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ nếu có
        DB::table('NhanVien')->truncate();

        // Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

        // Thêm 50 dòng dữ liệu vào bảng 'nhanviens'
        for ($i = 0; $i < 50; $i++) {
            DB::table('NhanVien')->insert([
                'DuongDanAnh' => $faker->imageUrl(),
                'TenNV' => $faker->name,
                'CCCD' => $faker->unique()->numerify('###############'),
                'NgaySinh' => $faker->date,
                'GioiTinh' => $faker->randomElement(['Nam', 'Nu']),
                'DiaChi' => $faker->address,
                'Email' => $faker->unique()->safeEmail,
                'SoDienThoai' => $faker->numerify('0#########'),
                'Chucvu' => $faker->word,
                'MaQL' => $faker->numberBetween(1, 50), // Giả sử MaQL là số nguyên từ 1 đến 50
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
