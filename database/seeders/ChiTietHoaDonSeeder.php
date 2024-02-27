<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ChiTietHoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Assuming MaHD and MaDV are foreign keys referring to HOADON and DICHVU tables
        $hoadonIds = DB::table('hoadon')->pluck('MaHD')->toArray();
        $dichvuIds = DB::table('dichvu')->pluck('MaDV')->toArray();

        // Generate 10 sample records
        for ($i = 1; $i <= 100; $i++) {
            DB::table('CHITIETHOADON')->insert([
                'MaHD' => $faker->randomElement($hoadonIds),
                'MaDV' => $faker->randomElement($dichvuIds),
                'SoLuong' => $faker->numberBetween(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
