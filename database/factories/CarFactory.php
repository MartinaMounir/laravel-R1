<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Car;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'price' => fake()->unique()->numberBetween(1,50),
            'description' => fake()->paragraph(),
            'published' => fake()->boolean(),
            'image' => fake()->imageUrl(),
            'category_id'=>fake()->numberBetween(1,10)

        ];
    }
}
