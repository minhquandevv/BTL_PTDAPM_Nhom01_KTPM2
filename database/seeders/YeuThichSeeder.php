<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class YeuThichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Assuming MaKH and MaP are foreign keys referring to KHACHHANG and PHONG tables
        $khachhangIds = DB::table('khachhang')->pluck('MaKH')->toArray();
        $phongIds = DB::table('phong')->pluck('MaP')->toArray();

        // Generate 10 sample records
        for ($i = 1; $i <= 100; $i++) {
            DB::table('YEUTHICH')->insert([
                'MaKH' => $faker->randomElement($khachhangIds),
                'MaP' => $faker->randomElement($phongIds),
                'NgayThemVao' => $faker->date,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
