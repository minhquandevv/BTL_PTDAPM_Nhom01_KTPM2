<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookingSeeder extends Seeder
{
    public function run()
    {
// Xóa dữ liệu cũ nếu có
        DB::table('DatPhong')->truncate();

// Lấy danh sách các phòng và khách hàng để tạo khóa ngoại
        $phongIds = DB::table('Phong')->pluck('MaP')->toArray();
        $khachhangIds = DB::table('KhachHang')->pluck('MaKH')->toArray();

// Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

// Thêm dữ liệu vào bảng 'datphongs'
        for ($i = 0; $i < 50; $i++) {
            DB::table('DatPhong')->insert([
                'MaKH' => $faker->randomElement($khachhangIds),
                'MaPhong' => $faker->randomElement($phongIds),
                'NgayDatPhong' => $faker->date,
                'NgayCheckIn' => $faker->date,
                'NgayCheckOut' => $faker->date,
                'SoNguoi' => $faker->numberBetween(1, 4),
                'TinhTrangDatPhong' => $faker->randomElement(['Chua xac nhan', 'Da xac nhan']),
                'TinhTrangThanhToan' => $faker->randomElement(['Chua thanh toan', 'Đa thanh toan']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
