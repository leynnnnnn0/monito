<?php

namespace App\Models;

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

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

}
