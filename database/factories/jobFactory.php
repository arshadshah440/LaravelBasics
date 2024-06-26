<?php

namespace Database\Factories;

use App\Models\employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
 */
class jobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => fake()->jobTitle(),
            'employer_id' => employer::factory(),
            'salary' => fake()->numberBetween(10000, 50000),
            'location' => fake()->city()
        ];
    }
}
