<?php

namespace Database\Seeders;

use App\Models\Donhang;
use App\Models\Mathang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class mathangseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN');
        for ($i = 1; $i <= 10; $i++) {
            Mathang::create([
                'ten_mat_hang' => $faker->word(),
                'loai_mat_hang_id' => $faker->numberBetween($min = 1, $max = 3),
                'gia' => $faker->randomFloat($nbMaxDecimals = 0, $min = 0, $max = 100000),
            ]);
        }
    }
}
