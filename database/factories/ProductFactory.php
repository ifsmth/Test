<?php

namespace Database\Factories;

use App\Models\Category;
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
            'name_of_product' => fake()->text(25) ,
            'category' => Category::inRandomOrder()->first()->name_of_category,
            'price_per_unit' => fake()->randomFloat(2, 100, 300) ,
            'amount' => fake()->numberBetween(40,50),
            'description_of_prod' => fake()->text(100),
            'discount' => fake()->numberBetween(2,10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
