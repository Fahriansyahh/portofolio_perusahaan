<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Promotion;
use App\Models\Promotion_service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion_service>
 */
class PromotionServiceFactory extends Factory
{
    protected $model = Promotion_service::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $promotion = Promotion::inRandomOrder()->first(); // Ambil promotion yang sudah ada
        $services = Service::inRandomOrder()->take(rand(1, 3))->pluck('id');

        return [
            'promotion_id' => $promotion->id, // Mengaitkan promotion
            'service_id' => $services,         // Mengaitkan service
        ];
    }
}
