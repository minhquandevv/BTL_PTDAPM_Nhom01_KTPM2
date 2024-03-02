<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ContactsSeeder extends Seeder
{
    public function run()
    {
        // Xóa dữ liệu cũ nếu có
        DB::table('LienHe')->truncate();

        // Sử dụng Faker để tạo dữ liệu giả
        $faker = Faker::create();

        // Thêm 50 dòng dữ liệu vào bảng 'lienhes'
        for ($i = 0; $i < 50; $i++) {
            DB::table('LienHe')->insert([
                'Email' => $faker->unique()->safeEmail,
                'SoDT' => $faker->phoneNumber,
                'MaQL' => $faker->numberBetween(1, 50), // Giả sử MaQL là số nguyên từ 1 đến 50
                'MaNV' => $faker->numberBetween(1, 50), // Giả sử MaNV là số nguyên từ 1 đến 50
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
