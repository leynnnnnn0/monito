<?php

namespace App\Filament\Resources\PetResource\Pages;

use App\Filament\Resources\PetResource;
use App\Models\Pet;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPet extends EditRecord
{
    protected static string $resource = PetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Fetch the pet record along with its related models
        $petData = Pet::with('health', 'pricingAvailability', 'additionalInfo', 'documents', 'images')
            ->find($data['id']);

        // Ensure the pet data exists
        if ($petData) {
            // Populate health-related data
            if ($petData->health) {
                $data['health_status'] = $petData->health->health_status ?? null;
                $data['vaccinated'] = $petData->health->vaccinated ?? null;
                $data['vaccination_details'] = $petData->health->vaccination_details ?? null;
                $data['special_care_needs'] = $petData->health->special_care_needs ?? null;
            }

            // Populate pricing and availability data
            if ($petData->pricingAvailability) {
                $data['price'] = $petData->pricingAvailability->price ?? null;
                $data['availability_status'] = $petData->pricingAvailability->availability_status ?? null;
                $data['adoption_status'] = $petData->pricingAvailability->adoption_status ?? null;
            }

            // Populate additional info data
            if ($petData->additionalInfo) {
                $data['previous_owner'] = $petData->additionalInfo->previous_owner ?? null;
                $data['description'] = $petData->additionalInfo->description ?? null;
            }

            // Handle documents
            if ($petData->documents) {
                $data['Documents'] = $petData->documents->map(function ($document) {
                    return [
                        'document_name' => $document->name
                    ];
                })->toArray();
            }

            // Handle images
            if ($petData->images) {
                $data['Images'] = $petData->images->map(function ($image) {
                    return [
                        'image_name' => $image->name
                    ];
                })->toArray();
            }
        }

        return $data;
    }
}
