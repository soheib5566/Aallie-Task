<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SalesData>
 */
class SalesDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product' => $this->faker->word(),
            'q1_sales' => $this->faker->randomFloat(2, 1000, 10000),
            'q2_sales' => $this->faker->randomFloat(2, 1000, 10000),
            'q3_sales' => $this->faker->randomFloat(2, 1000, 10000),
            'q4_sales' => $this->faker->randomFloat(2, 1000, 10000),
            'target' => $this->faker->randomFloat(2, 1000, 10000),
        ];
    }
}
