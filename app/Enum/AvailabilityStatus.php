<?php

namespace App\Enum;

enum AvailabilityStatus : string
{
    case AVAILABLE = 'Available';
    case SOLD = 'Sold';
    case RESERVED = 'Reserved';
}
