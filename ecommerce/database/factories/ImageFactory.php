<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $count = 1;
        return [
            'image'=> 'https://via.placeholder.com/300.png',
            'item_id' => $count++,
            'item_detail_id' => fake()->numberBetween(1, 50),
        ];
    }
}
