<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class QuanlySeeder extends Seeder
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
            DB::table('QUANLY')->insert([
                'TenQL' => $faker->name,
                'CCCD' => $faker->regexify('[0-9]{8}'),
                'NgaySinh' => $faker->date,
                'GioiTinh' => $faker->randomElement(['Male', 'Female']),
                'DiaChi' => $faker->address,
                'Email' => $faker->email,
                'SoDienThoai' => $faker->phoneNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
