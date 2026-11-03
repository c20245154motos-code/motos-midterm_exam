<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Station extends Model
{
    protected $fillable = [
        'name',
    ];

    public function departureTrips(): HasMany
    {
        return $this->hasMany(
            BikeTrip::class,
            'start_station_id'
        );
    }

    public function arrivalTrips(): HasMany
    {
        return $this->hasMany(
            BikeTrip::class,
            'end_station_id'
        );
    }
}

