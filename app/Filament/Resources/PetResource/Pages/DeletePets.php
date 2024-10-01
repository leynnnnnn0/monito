<?php

namespace App\Filament\Resources\PetResource\Pages;

use App\Filament\Resources\PetResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;

class DeletePets extends ListRecords
{

    protected static string $resource = PetResource::class;
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
