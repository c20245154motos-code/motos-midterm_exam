<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Station extends Model
{
    protected $fillable = ['station_name'];

    public function startingTrips(): HasMany
    {
        return $this->hasMany(
            BikeTrip::class,
            'start_station_id'
        );
    }

    public function endingTrips(): HasMany
    {
        return $this->hasMany(
            BikeTrip::class,
            'end_station_id'
        );
    }
}
