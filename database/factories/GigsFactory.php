<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gigs>
 */
class GigsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role' => fake()->name(),
            'user_id' => fake()->numberBetween(1,  5),
            'company' =>fake()->company(),
            'country' =>fake()->country(),
            'state' =>fake()->city(),
            'address' =>fake()->streetAddress(),
            'tags' =>fake()->jobTitle(),
            'minimum_salary' =>fake()->numberBetween(3000, 5000),
            'maximum_salary' =>fake()->numberBetween(8000, 10000),
        ];
    }
}
