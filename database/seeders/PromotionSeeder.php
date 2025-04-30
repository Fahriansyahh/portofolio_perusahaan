<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Promotion;
use App\Models\Promotion_service;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        User::factory(5)->create();

        // Seed Services
        Service::factory(10)->create();

        // Seed Promotions
        Promotion::factory(5)->create();

        //seed promotions service

        Promotion_service::factory(2)->create();


        // Seed Testimonials
        Testimonial::factory(20)->create();
    }
}
