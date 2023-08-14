<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
             'taste' => fake()->randomElement([1,2,3]),
             'color' => fake()->randomElement(['grün','blau','schwarz']),
             'price' => fake()->numberBetween(1, 10000),
         ];
    }
}
