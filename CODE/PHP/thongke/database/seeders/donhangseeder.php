<?php

namespace Database\Seeders;

use App\Models\Donhang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class donhangseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN');
        for ($i = 1; $i <= 10; $i++) {
            DonHang::create([
                'khach_hang_id' => $faker->numberBetween($min = 1, $max = 3),
                'mat_hang_id' => $faker->numberBetween($min = 1, $max = 3),
                'so_luong' => $faker->numberBetween($min = 1, $max = 5),
                'ngay_dat' => $faker->date($format = 'Y-m-d', $max = 'now')
            ]);
        }
    }
}
