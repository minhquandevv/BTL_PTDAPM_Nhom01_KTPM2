<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LienheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Assuming MaQL and MaNV are foreign keys referring to QUANLY and NHANVIEN tables
        $quanlyIds = DB::table('quanly')->pluck('MaQL')->toArray();
        $nhanvienIds = DB::table('nhanvien')->pluck('MaNV')->toArray();

        // Generate 10 sample records
        for ($i = 1; $i <= 100; $i++) {
            DB::table('LIENHE')->insert([
                'Email' => $faker->email,
                'SoDT' => $faker->phoneNumber,
                'MaQL' => $faker->randomElement($quanlyIds),
                'MaNV' => $faker->randomElement($nhanvienIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
