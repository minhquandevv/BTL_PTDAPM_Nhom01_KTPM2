<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BangKhuyenMaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('bang_khuyen_mai')->insert([
                'NgayBatDau' => $faker->date(),
                'NgayKetThuc' => $faker->date(),
                'MaP' => $faker->numberBetween(1, 50),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
