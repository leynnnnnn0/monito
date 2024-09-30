<?php

namespace App\Filament\Resources\PetResource\Pages;

use App\Filament\Resources\PetResource;
use App\Models\Image;
use App\Models\Pet;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class EditPet extends EditRecord
{
    protected static string $resource = PetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        return DB::transaction(function () use ($record, $data) {
            // Basic Details
            $record->update([
                'name' => $data['name'],
                'breed' => $data['breed'],
                'date_of_birth' => Carbon::parse($data['date_of_birth']),
                'gender' => $data['gender'],
                'color' => $data['color'],
                'size' => $data['size'],
                'weight' => $data['weight'],
            ]);
            // Health
            $record->health()->update([
                'health_status' => $data['health_status'],
                'vaccinated' => $data['vaccinated'],
                'vaccination_details' => $data['vaccination_details'],
                'special_care_needs' => $data['special_care_needs'],
            ]);
            // Pricing and Availability
            $record->pricingAvailability()->update([
                'price' => $data['price'],
                'availability_status' => $data['availability_status'],
                'adoption_status' => $data['adoption_status'],
            ]);
            // Additional Information 
            if ($data['description'] || $data['previous_owner']) {
                $record->additionalInfo()->update([
                    'description' => $data['description'] ?? null,
                    'previous_owner' => $data['previous_owner'] ?? null,
                ]);
            }
            // Documents
            if ($data['Documents']) {
                $record->documents()->delete();
                foreach ($data['Documents'] as $document) {
                    if (!$document['document_name']) continue;
                    $record->documents()->create([
                        'name' => $document['document_name']
                    ]);
                }
            }
            // Images
            if ($data['Images']) {
                $record->images()->delete();
                foreach ($data['Images'] as $image) {
                    if (!$image['image_name']) continue;
                    $record->images()->create([
                        'name' => $image['image_name']
                    ]);
                }

            }
            return $record;
        });
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
