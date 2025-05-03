<?php

namespace Database\Seeders;

use App\Models\ChiTietDonHang;
use App\Models\Donhang;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class chitietdonhangseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN');
        for ($i = 1; $i <= 20; $i++) {
            ChiTietDonHang::create([
                'don_hang_id' => $faker->numberBetween($min = 1, $max = 10),
                'mat_hang_id' => $faker->numberBetween($min = 1, $max = 3),
                'so_luong' => $faker->numberBetween($min = 1, $max = 5),
            ]);
        }
    }
}
