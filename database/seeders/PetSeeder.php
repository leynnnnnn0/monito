<?php

namespace Database\Seeders;

use App\Models\AdditionalInfo;
use App\Models\Health;
use App\Models\Image;
use App\Models\Pet;
use App\Models\PricingAvailability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Nette\Utils\Random;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = scandir(base_path() . '//storage//app//public//images');
        $imageData = [];
        foreach ($images as $image) {
            if ($image == '.' || $image == '..') continue;
            $imageData[] = "images/$image";
        }
        Pet::factory(20)
            ->has(Health::factory())
            ->has(PricingAvailability::factory())
            ->has(AdditionalInfo::factory())
            ->afterCreating(function (Pet $pet) use ($imageData) {
                for ($i = 0; $i < 5; $i++) {
                    $pet->images()->create(['name' => $imageData[random_int(0, count($imageData) - 1)]]);
                }
            })
            ->create();
    }
}
