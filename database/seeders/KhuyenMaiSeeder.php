<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KhuyenMaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Assuming MaP and MaQL are foreign keys referring to PHONG and QUANLY tables
        $phongIds = DB::table('phong')->pluck('MaP')->toArray();
        $quanlyIds = DB::table('quanly')->pluck('MaQL')->toArray();

        // Generate 5 sample records
        for ($i = 1; $i <= 20; $i++) {
            DB::table('KHUYENMAI')->insert([
                'Mota' => $faker->sentence,
                'NgayBatDau' => $faker->date,
                'NgayKetThuc' => $faker->date,
                'MaP' => $faker->randomElement($phongIds),
                'MaQL' => $faker->randomElement($quanlyIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
