<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PaymentSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ nếu có
        DB::table('ThanhToan')->truncate();

// Lấy danh sách các đặt phòng để tạo khóa ngoại
        $datphongIds = DB::table('DatPhong')->pluck('MaDatPhong')->toArray();

// Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

// Thêm dữ liệu vào bảng 'thanhtoans'
        for ($i = 0; $i < 50; $i++) {
            DB::table('ThanhToan')->insert([
                'MaDatPhong' => $faker->randomElement($datphongIds),
                'NgayThanhToan' => $faker->date,
                'TongTien' => $faker->randomFloat(2, 100, 500),
                'PhuongThucThanhToan' => $faker->randomElement(['Tien mat', 'Chuyen khoan']),
                'TinhTrangThanhToan' => $faker->randomElement(['Chua thanh toan', 'Đa thanh toan']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

