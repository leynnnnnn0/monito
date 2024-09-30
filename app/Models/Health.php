<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id',
        'health_status',
        'vaccinated',
        'vaccination_details',
        'special_care_needs',
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
