<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_of_category' => fake()->unique()->text(10),
            'category_image' => fake()->text(20),
            'category_description' => fake()->text(20),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
