<?php

namespace Database\Seeders;

use App\Models\Loaimathang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class loaimathangseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN');
        for ($i = 1; $i <= 3; $i++) {
            Loaimathang::create([
                'ten_loai' => $faker->word()
            ]);
        }
    }
}
