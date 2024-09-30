<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id',
        'description',
        'previous_owner',
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
