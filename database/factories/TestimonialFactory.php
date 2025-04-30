<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
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
            'position' => fake()->optional()->jobTitle(),
            'company' => fake()->optional()->company(),
            'message' => fake()->paragraph(),
            'photo' => fake()->optional()->imageUrl(100, 100, 'people', true),
            'service_id' =>  Service::inRandomOrder()->first()->id
        ];
    }
}
