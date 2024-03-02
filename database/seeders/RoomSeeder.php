<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RoomSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ nếu có
        DB::table('Phong')->truncate();

        // Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

        // Thêm dữ liệu vào bảng 'phongs'
        for ($i = 0; $i < 50; $i++) {
            DB::table('Phong')->insert([
                'TenPhong' => $faker->word,
                'GioiThieuPhong' => $faker->sentence,
                'DonGia' => $faker->randomFloat(2, 50, 500),
                'TinhTrang' => $faker->word,
                'ViewHuongBien' => $faker->boolean,
                'CoBonTamNgoi' => $faker->boolean,
                'KichThuoc' => $faker->numberBetween(20, 100),
                'MaLoaiPhong' => $faker->numberBetween(1, 10),
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
