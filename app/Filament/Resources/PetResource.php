<?php

namespace App\Filament\Resources;

use App\Enum\AdoptionStatus;
use App\Enum\AvailabilityStatus;
use App\Enum\Gender;
use App\Enum\Size;
use App\Filament\Resources\PetResource\Pages;
use App\Models\Pet;
use Carbon\Carbon;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Infolists\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Number;

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
                                ->downloadable()
                                ->directory('documents')
                        ]),

                        Repeater::make('Images')->schema([
                            FileUpload::make('image_name')
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
                TextColumn::make('breed'),
                TextColumn::make('gender'),
                TextColumn::make('date_of_birth')
                    ->formatStateUsing(fn($state) => Carbon::parse($state)->format('F d, Y')),
                TextColumn::make('pricingAvailability.price')
                    ->label('Price')
                    ->formatStateUsing(fn($state) => Number::format($state, 2)),
                TextColumn::make('pricingAvailability.availability_status')
                    ->label('Availability')
                    ->color(fn($state) => AvailabilityStatus::from($state)->getColor())
                    ->badge()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()
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
            'delete' => Pages\DeletePets::route('/{record}/delete'),
            'view' => Pages\ViewPet::route('/{record}'),
        ];
    }
}
