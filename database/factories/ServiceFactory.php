<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'price_range' => fake()->randomElement(['2jt - 5jt', '5jt - 10jt', null]),
            'estimated_time' => fake()->randomElement(['1-2 minggu', '2-4 minggu']),
            'image' => fake()->imageUrl(640, 480, 'business', true),
        ];
    }
}
