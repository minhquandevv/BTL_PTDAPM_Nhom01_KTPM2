<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ServiceRoomSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ nếu có
        // Xóa dữ liệu cũ nếu có
        DB::table('DichVuPhong')->truncate();

        // Lấy danh sách các phòng và dịch vụ để tạo khóa ngoại
        $phongIds = DB::table('Phong')->pluck('MaP')->toArray();
        $dichvuIds = DB::table('DichVu')->pluck('MaDV')->toArray();

        // Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

        // Thêm dữ liệu vào bảng 'dichvu_phongs'
        for ($i = 0; $i < 50; $i++) {
            DB::table('DichVuPhong')->insert([
                'MaPhong' => $faker->randomElement($phongIds),
                'MaDichVu' => $faker->randomElement($dichvuIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
