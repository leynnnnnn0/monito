<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'breed',
        'age',
        'gender',
        'color',
        'size',
        'weight',
    ];

    public function health()
    {
        return $this->hasOne(Health::class);
    }

    public function pricingAvailability()
    {
        return $this->hasOne(PricingAvailability::class);
    }

    public function additionalInfo()
    {
        return $this->hasOne(AdditionalInfo::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
