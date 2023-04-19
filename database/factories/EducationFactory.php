<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'school' => $this->faker->sentence,
            'program' => $this->faker->sentence,
            'country' => $this->faker->sentence,
            'start_date' => $this->faker->dateTimeThisMonth,
            'end_date' => $this->faker->dateTimeThisMonth,
        ];
    }
}
