<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FavoriteSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ nếu có
        DB::table('YeuThich')->truncate();

        // Lấy danh sách các phòng và khách hàng để tạo khóa ngoại
        $phongIds = DB::table('Phong')->pluck('MaP')->toArray();
        $khachhangIds = DB::table('KhachHang')->pluck('MaKH')->toArray();

        // Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

        // Thêm dữ liệu vào bảng 'yeuthichs'
        for ($i = 0; $i < 50; $i++) {
            DB::table('YeuThich')->insert([
                'MaP' => $faker->randomElement($phongIds),
                'MaKH' => $faker->randomElement($khachhangIds),
                'NgayThemVao' => $faker->date,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
