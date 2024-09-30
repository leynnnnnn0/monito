<?php

namespace App\Enum;

enum AvailabilityStatus: string
{
    case AVAILABLE = 'Available';
    case SOLD = 'Sold';
    case RESERVED = 'Reserved';

    public static function values()
    {
        $data = array_column(self::cases(), 'value');
        return array_combine($data, $data);
    }
}
