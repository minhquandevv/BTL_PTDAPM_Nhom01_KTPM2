<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NhanvienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate 10 sample records
        for ($i = 1; $i <= 100; $i++) {
            DB::table('NHANVIEN')->insert([
                'TenNV' => $faker->name,
                'CCCD' => $faker->regexify('[0-9]{8}'),
                'NgaySinh' => $faker->date,
                'GioiTinh' => $faker->randomElement(['Male', 'Female']),
                'DiaChi' => $faker->address,
                'Email' => $faker->email,
                'SoDienThoai' => $faker->phoneNumber,
                'Chucvu' => $faker->jobTitle,
                'MaQL' => $faker->numberBetween(1, 10), // Assuming MaQL is the ID of QUANLY table
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
