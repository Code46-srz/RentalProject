<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //create fake data for agent model
            'agent_firstname' => $this->faker->firstName(),
            'agent_lastname' => $this->faker->lastName(),
            'agent_trec#' => $this->faker->randomNumber(9),
            'agent_phonenumber' => $this->faker->phoneNumber(),
            'agent_company' => $this->faker->company(),
            'agent_company_mls#' => $this->faker->randomNumber(9),
        ];
    }
}
