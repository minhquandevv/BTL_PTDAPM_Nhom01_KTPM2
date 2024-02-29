<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MangersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('QuanLy')->insert([
                'TenQL' => $faker->name,
                'CCCD' => $faker->regexify('[0-9]{9}'),
                'img' => $faker->imageUrl($width = 640, $height = 480),
                'NgaySinh' => $faker->date($format = 'Y-m-d', $max = '2000-01-01'),
                'GioiTinh' => $faker->randomElement(['Nam', 'Nữ']),
                'DiaChi' => $faker->address,
                'Email' => $faker->unique()->safeEmail,
                'SoDienThoai' => $faker->phoneNumber,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
