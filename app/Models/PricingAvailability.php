<?php

namespace App\Models;

use App\Enum\AdoptionStatus;
use App\Enum\AvailabilityStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingAvailability extends Model
{
    use HasFactory;
    protected $fillable = [
        'pet_id',
        'price',
        'availability_status',
        'adoption_status',
        'date_added',
    ];

    // public function casts()
    // {
    //     return [
    //         'availability_status' => AvailabilityStatus::class,
    //         'adoption_status' => AdoptionStatus::class,
    //         'date_added' => Carbon::class
    //     ];
    // }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
