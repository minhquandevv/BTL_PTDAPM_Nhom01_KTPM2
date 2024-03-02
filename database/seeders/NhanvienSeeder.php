<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class NhanvienSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('nhanvien')->insert([
                'DuongDanAnh' => $faker->imageUrl(),
                'TenQL' => $faker->name,
                'CCCD' => $faker->unique()->randomNumber(8),
                'NgaySinh' => $faker->date,
                'GioiTinh' => $faker->randomElement(['Nam', 'Nu']),
                'DiaChi' => $faker->address,
                'Email' => $faker->unique()->safeEmail,
                'Password' => Hash::make('password'), // Use Hash::make to securely hash passwords
                'Chucvu' => $faker->jobTitle,
                'SoDienThoai' => $faker->phoneNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
