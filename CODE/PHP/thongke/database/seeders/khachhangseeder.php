<?php

namespace Database\Seeders;

use App\Models\Khachhang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class khachhangseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN');
        for ($i = 1; $i <= 3; $i++) {
            Khachhang::create([
                'ten_khach_hang' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'so_dien_thoai' => $faker->phoneNumber()
            ]);
        }
    }
}
