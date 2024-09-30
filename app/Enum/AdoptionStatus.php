<?php

namespace App\Enum;

enum AdoptionStatus: string
{
    case FOR_SALE = 'For Sale';
    case FOR_ADOPTION = 'For Adoption';

    public static function values()
    {
        return array_column(self::cases(), 'value');
    }
}
