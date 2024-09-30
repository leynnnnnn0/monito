<?php

namespace App\Enum;

enum AvailabilityStatus : string
{
    case AVAILABLE = 'Available';
    case SOLD = 'Sold';
    case RESERVED = 'Reserved';

    public static function values()
    {
        return array_column(self::cases(), 'value');
    }
}
