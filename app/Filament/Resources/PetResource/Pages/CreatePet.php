<?php

namespace App\Filament\Resources\PetResource\Pages;

use App\Filament\Resources\PetResource;
use Carbon\Carbon;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\DB;

class CreatePet extends CreateRecord
{
    protected static string $resource = PetResource::class;

    public function handleRecordCreation(array $data): \Illuminate\Database\Eloquent\Model
    {
        return DB::transaction(function () use ($data) {
            // Basic Details
            $pet = static::getModel()::create([
                'name' => $data['name'],
                'breed' => $data['breed'],
                'date_of_birth' => Carbon::parse($data['date_of_birth']),
                'gender' => $data['gender'],
                'color' => $data['color'],
                'size' => $data['size'],
                'weight' => $data['weight'],
            ]);
            // Health
            $pet->health()->create([
                'health_status' => $data['health_status'],
                'vaccinated' => $data['vaccinated'],
                'vaccination_details' => $data['vaccination_details'],
                'special_care_needs' => $data['special_care_needs'],
            ]);
            // Pricing and Availability
            $pet->pricingAvailability()->create([
                'price' => $data['price'],
                'availability_status' => $data['availability_status'],
                'adoption_status' => $data['adoption_status'],
            ]);
            // Additional Information 
            if ($data['description'] || $data['previous_owner']) {
                $pet->additionalInfo()->create([
                    'description' => $data['description'] ?? null,
                    'previous_owner' => $data['previous_owner'] ?? null,
                ]);
            }
            // Documents
            if ($data['Documents'][0]['document_name']) {
                foreach ($data['Documents'] as $document) {
                    $pet->documents()->create([
                        'name' => $document['document_name']
                    ]);
                }
            }
            // Images
            if ($data['Images'][0]['image_name']) {
                foreach ($data['Images'] as $image) {
                    $pet->images()->create([
                        'name' => $image['image_name']
                    ]);
                }
            }

            return $pet;
        });
    }
}
