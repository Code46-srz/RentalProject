<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail>
 */
class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //create 1 detail entry
            'detail_num_bed' => $this->faker->randomDigit,
            'detail_num_bath' => $this->faker->randomDigit,
            'detail_sqft' => $this->faker->randomDigit,
            'detail_property_ad_type' => $this->faker->randomElement(['rent', 'sale']),
            'detail_year_built' => $this->faker->randomDigit,
            'detail_ac_type' => $this->faker->randomElement(['central', 'split']),
            'detail_num_carport' => $this->faker->randomDigit,
            'detail_overview' => $this->faker->text,
            'detail_property_id' => 3,
        ];
    }
}
