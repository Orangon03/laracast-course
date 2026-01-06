<?php

namespace Database\Factories;

use App\Models\Employer;
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
            'title' => fake()->jobTitle(),
            // 'salary'=>fake()->salary(),
            'salary' => fake()->randomElement([
                '$50,000',
                '$90,000',
                '$150,000',
                '$180,000',
            ]),
            'employer_id' => Employer::factory(),
        ];
    }
}
