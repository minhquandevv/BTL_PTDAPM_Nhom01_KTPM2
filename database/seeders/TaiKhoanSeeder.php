<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Assuming MaLoaiTK is a foreign key referring to LOAITAIKHOAN table
        $loaitaikhoanIds = DB::table('loaitaikhoan')->pluck('MaLoaiTK')->toArray();

        // Generate 5 sample records
        for ($i = 1; $i <= 50; $i++) {
            DB::table('TAIKHOAN')->insert([
                'MaLoaiTK' => $faker->randomElement($loaitaikhoanIds),
                'TenDangNhap' => $faker->userName,
                'MatKhau' => bcrypt($faker->password),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
