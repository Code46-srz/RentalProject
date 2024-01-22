<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //create 20 properties
            //'property_address' => $this->faker->address,
            //'property_price' => $this->faker->randomFloat(2, 100000, 1000000),
            //'property_details_id' => $this->faker->numberBetween(1, 20),
            //'property_agent_id' => $this->faker->numberBetween(1, 20),
            //'property_status' => 1, //$this->faker->numberBetween(1, 3),
            //'property_featured' => $this->faker->numberBetween(0, 1),
        ];
    }
}
