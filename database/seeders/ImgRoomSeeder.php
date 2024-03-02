<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ImgRoomSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ nếu có
        DB::table('img_rooms')->truncate();

        // Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

        // Lấy danh sách các phòng để tạo khóa ngoại
        $phongIds = DB::table('Phong')->pluck('MaP')->toArray();

        // Thêm dữ liệu vào bảng 'anhphongs'
        for ($i = 0; $i < 50; $i++) {
            DB::table('img_rooms')->insert([
                'MaPhong' => $faker->randomElement($phongIds),
                'DuongDanAnh' => $faker->imageUrl(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
