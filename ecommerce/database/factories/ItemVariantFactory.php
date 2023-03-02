<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemVariant>
 */
class ItemVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_id' => fake()->numberBetween(1, 20),
            'variant_name' => fake()->word(),
            'quantity' => fake()->numberBetween(1, 15),
            'price' => fake()->numberBetween(500000, 5000000),
            'description' => fake()->text()
        ];
    }
}
