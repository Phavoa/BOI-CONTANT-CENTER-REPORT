<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'entry_date' => fake()->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            'entries' => fake()->numberBetween(0, 1000),
            'update' => fake()->numberBetween(0, 1000),
            'requests' => fake()->numberBetween(0, 1000),
            'payment_issues' => fake()->numberBetween(0, 1000),
            'wrong_location' => fake()->numberBetween(0, 1000),
            'call_dropped' => fake()->numberBetween(0, 1000),
            // 'total' => fake()->numberBetween(0, 1000),

        ];
    }
}
