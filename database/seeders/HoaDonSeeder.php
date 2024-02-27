<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Assuming MaKH, MaNV, and MaP are foreign keys referring to KHACHHANG, NHANVIEN, and PHONG tables
        $khachhangIds = DB::table('khachhang')->pluck('MaKH')->toArray();
        $nhanvienIds = DB::table('nhanvien')->pluck('MaNV')->toArray();
        $phongIds = DB::table('phong')->pluck('MaP')->toArray();

        // Generate 10 sample records
        for ($i = 1; $i <= 100; $i++) {
            DB::table('HOADON')->insert([
                'MaKH' => $faker->randomElement($khachhangIds),
                'MaNV' => $faker->randomElement($nhanvienIds),
                'MaP' => $faker->randomElement($phongIds),
                'NgayDatPhong' => $faker->date,
                'NgayTraPhong' => $faker->date,
                'TinhTrangHoaDon' => $faker->randomElement(['Paid', 'Pending', 'Cancelled']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
