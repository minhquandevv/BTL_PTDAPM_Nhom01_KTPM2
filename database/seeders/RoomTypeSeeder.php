<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RoomTypeSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ nếu có
        DB::table('LoaiPhong')->truncate();

        // Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

        // Thêm dữ liệu vào bảng 'loaiphongs'
        for ($i = 0; $i < 50; $i++) {
            DB::table('LoaiPhong')->insert([
                'TenLoaiPhong' => $faker->word,
                'MoTa' => $faker->sentence,
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
