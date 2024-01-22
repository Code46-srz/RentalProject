<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /* public function run(): void
    {
        Detail::factory()->count(1)->create();
    } */
    public function run(): void
    {
        $faker = Faker::create();

        Detail::all()->each(function ($detail) use ($faker) {
            $detail->update([
                'detail_year_built' => $faker->numberBetween(1900, 2021),
            ]);
        });
    }
}
