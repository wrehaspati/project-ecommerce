<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'general_description' => fake()->text(),
            'thumbnail' => 'https://via.placeholder.com/300.png',
            'display_price' => fake()->numberBetween(500000, 5000000)
        ];
    }
}
