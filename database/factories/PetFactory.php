<?php

namespace Database\Factories;

use App\Enum\Size;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'breed' => $this->faker->randomElement([
                'Labrador Retriever',
                'German Shepherd',
                'Golden Retriever',
                'Bulldog',
                'Beagle',
                'Poodle',
                'Rottweiler',
                'Yorkshire Terrier',
                'Boxer',
                'Dachshund',
                'Shih Tzu',
                'Pomeranian',
                'Chihuahua',
                'Cocker Spaniel',
                'Siberian Husky',
                'Great Dane',
                'Doberman Pinscher',
                'Border Collie',
                'Australian Shepherd',
                'Pug',
                'Maltese',
                'Cavalier King Charles Spaniel',
                'Shiba Inu',
                'Basset Hound',
                'French Bulldog',
                'Boston Terrier',
                'Bernese Mountain Dog',
                'Saint Bernard',
                'Alaskan Malamute',
                'Weimaraner'
            ]),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'date_of_birth' => $this->faker->date(),
            'color' => $this->faker->colorName(),
            'size' => $this->faker->randomElement(Size::values()),
            'weight' => $this->faker->numberBetween(7, 20),
        ];
    }
}
