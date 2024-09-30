<?php

namespace App\Enum;

enum Size: string
{
    case SMALL = 'Small';
    case MEDIUM = 'Medium';
    case LARGE = 'Large';

    public static function values()
    {
        $data = array_column(self::cases(), 'value');
        return array_combine($data, $data);
    }
}
