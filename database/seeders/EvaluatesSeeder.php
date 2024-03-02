<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EvaluatesSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ nếu có
        DB::table('DanhGia')->truncate();

// Lấy danh sách các đặt phòng để tạo khóa ngoại
        $datphongIds = DB::table('DatPhong')->pluck('MaDatPhong')->toArray();

// Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

// Thêm dữ liệu vào bảng 'danhgia_nhanxets'
        for ($i = 0; $i < 50; $i++) {
            DB::table('DanhGia')->insert([
                'MaDatPhong' => $faker->randomElement($datphongIds),
                'DiemDanhGia' => $faker->numberBetween(1, 5),
                'NhanXet' => $faker->sentence,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
