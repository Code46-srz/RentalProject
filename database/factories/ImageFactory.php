<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //add a record to the image table
            'image_description' => $this->faker->randomElement(['front', 'back', 'side']),
            //'image_of_property' => $this->faker->imageUrl(640, 480, 'animals', true),
            'image_property_id' => 20,
        ];
    }
}
