<?php

namespace App\Enum;

use Filament\Support\Contracts\HasColor;

enum AvailabilityStatus: string implements HasColor
{
    case AVAILABLE = 'Available';
    case SOLD = 'Sold';
    case RESERVED = 'Reserved';

    public static function values()
    {
        $data = array_column(self::cases(), 'value');
        return array_combine($data, $data);
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::AVAILABLE => 'success',
            self::RESERVED => 'warning',
            self::SOLD => 'gray',
        };
    }
}
