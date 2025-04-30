<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion>
 */
class PromotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = fake()->dateTimeBetween('-1 month', 'now');
        $endDate = fake()->dateTimeBetween($startDate, '+1 month');
        $discount = fake()->numberBetween(10, 50);
        $basePrice = fake()->numberBetween(1000000, 10000000);
        $priceAfterDiscount = $basePrice * ((100 - $discount) / 100);

        return [
            'title' => fake()->sentence(),  // Menggunakan sentence sebagai pengganti catchPhrase
            'description' => fake()->optional()->paragraph(),
            'discount_percent' => $discount,
            'price_after_discount' => fake()->optional()->randomFloat(2, 500000, $priceAfterDiscount),
            'start_date' => $startDate->format('Y-m-d'),
            'end_date' => $endDate->format('Y-m-d'),
            'image' => fake()->optional()->imageUrl(640, 480, 'promotion', true),
        ];
    }
}
