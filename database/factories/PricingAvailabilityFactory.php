<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PricingAvailability>
 */
class PricingAvailabilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => $this->faker->numberBetween(5000, 20000),
            'availability_status' => 'Available',
            'adoption_status' => $this->faker->randomElement(['For Sale', 'For Adoption']),
        ];
    }
}
