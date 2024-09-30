<?php

namespace App\Filament\Resources;

use App\Enum\AdoptionStatus;
use App\Enum\AvailabilityStatus;
use App\Enum\Gender;
use App\Enum\Size;
use App\Filament\Resources\PetResource\Pages;
use App\Models\Pet;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PetResource extends Resource
{
    protected static ?string $model = Pet::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make()->schema([
                    Step::make('Basic Information')->schema([
                        TextInput::make('name')
                            ->required()
                            ->minLength(2),

                        TextInput::make(name: 'breed')
                            ->required()
                            ->minLength(2),

                        DatePicker::make(name: 'date_of_birth')
                            ->native(false)
                            ->required(),

                        Select::make(name: 'gender')
                            ->options(Gender::values())
                            ->required(),

                        TextInput::make(name: 'color')
                            ->required()
                            ->minLength(2),

                        Select::make(name: 'size')
                            ->options(options: Size::values())
                            ->required(),

                        TextInput::make(name: 'weight')
                            ->numeric()
                            ->required(),
                    ])->columns(2),

                    Step::make('Health Information')->schema([
                        TextInput::make('health_status')
                            ->minLength(2)
                            ->required(),

                        Radio::make('vaccinated')
                            ->options([
                                true => 'Yes',
                                false => 'No'
                            ])
                            ->boolean()
                            ->inline()
                            ->required(),

                        TextInput::make('vaccination_details'),

                        TextInput::make('special_care_needs'),

                    ])->columns(2),

                    Step::make('Pricing and Availability')->schema([
                        TextInput::make('price')
                            ->numeric()
                            ->required(),

                        Select::make('availability_status')
                            ->required()
                            ->options(AvailabilityStatus::values()),

                        Select::make('adoption_status')
                            ->required()
                            ->options(AdoptionStatus::values()),

                    ])->columns(2),

                    Step::make('Additional Information')->schema([
                        Textarea::make('description')
                            ->columns(2)
                            ->rows(2),

                        TextInput::make(name: 'previous_owner'),

                    ])->columns(2),

                    Step::make('Images and Documents')->schema([
                        Repeater::make('Documents')->schema([
                            FileUpload::make('document_name')
                                ->multiple()
                                ->downloadable()
                                ->directory('documents')
                        ]),

                        Repeater::make('Images')->schema([
                            FileUpload::make('image_name')
                                ->multiple()
                                ->downloadable()
                                ->directory('images')
                        ])

                    ])->columns(2)
                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPets::route('/'),
            'create' => Pages\CreatePet::route('/create'),
            'edit' => Pages\EditPet::route('/{record}/edit'),
        ];
    }
}
