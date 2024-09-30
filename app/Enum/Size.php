<?php

namespace App\Enum;

enum Size: string
{
    case SMALL = 'Small';
    case MEDIUM = 'Medium';
    case LARGE = 'Large';

    public static function values()
    {
        return array_column(self::cases(), 'value');
    }
}
