<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bicycle extends Model
{
    protected $fillable = [
        'bike_code',
        'status',
    ];

    public function setBikeCodeAttribute($value): void
    {
        $this->attributes['bike_code'] = strtoupper(trim($value));
    }

    public function trips(): HasMany
    {
        return $this->hasMany(BikeTrip::class);
    }
}

