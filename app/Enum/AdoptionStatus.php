<?php

namespace App\Enum;

enum AdoptionStatus: string
{
    case FOR_SALE = 'For Sale';
    case FOR_ADOPTION = 'For Adoption';

    public static function values()
    {
        $data = array_column(self::cases(), 'value');
        return array_combine($data, $data);
    }
}
