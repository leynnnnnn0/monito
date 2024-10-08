<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id',
        'name'
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

}
