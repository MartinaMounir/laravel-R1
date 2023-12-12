<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Place;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'from' => fake()->numberBetween(1,10),
            'to' => fake()->numberBetween(11,20),
            'shortdescription' => fake()->paragraph(),
            'image' => fake()->imageUrl(),

        ];
    }
}
