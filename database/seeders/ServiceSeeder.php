<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ nếu có
        DB::table('DichVu')->truncate();

        // Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

        // Thêm dữ liệu vào bảng 'dichvus'
        for ($i = 0; $i < 50; $i++) {
            DB::table('DichVu')->insert([
                'TenDichVu' => $faker->word,
                'GiaDichVu' => $faker->randomFloat(2, 10, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
