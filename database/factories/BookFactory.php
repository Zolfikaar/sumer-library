<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'desc' => fake()->sentence(),
            'buy_price' => fake()->randomFloat(4,5,99),
            'sell_price' => fake()->randomFloat(4,5,99),
            'author_id' => fake()->numberBetween(1,4),
            'category_id' => fake()->numberBetween(1,9),
            'year' => fake()->year(),
        ];
    }
}
