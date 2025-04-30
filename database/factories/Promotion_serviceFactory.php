<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Promotion;
use App\Models\Promotion_service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PromotionService>
 */
class Promotion_serviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Ambil ID promotion secara acak dari tabel 'promotions'
        $promotion_id = Promotion::inRandomOrder()->first()->id;

        // Ambil ID service secara acak dari tabel 'services'
        $service_id = Service::inRandomOrder()->first()->id;

        return [
            'promotion_id' => $promotion_id, // Ambil promotion_id secara acak
            'service_id' => $service_id,     // Ambil service_id secara acak
        ];
    }
}
