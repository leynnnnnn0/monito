<?php

namespace App\Filament\Resources\PetResource\Pages;

use App\Filament\Resources\PetResource;
use Filament\Actions;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\Tabs;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewPet extends ViewRecord
{
    protected static string $resource = PetResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('View Information about pet')
                            ->schema([
                                TextEntry::make('name'),
                                TextEntry::make('breed'),
                                TextEntry::make('gender'),
                                TextEntry::make('date_of_birth'),
                                TextEntry::make('color'),
                                TextEntry::make('size'),
                                TextEntry::make('weight'),
                            ])->columns(2),
                    ])
                    ->activeTab(1)
                    ->columnSpanFull()
            ]);
    }

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make()
        ];
    }
}
