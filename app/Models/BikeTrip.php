<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BikeTrip extends Model
{
    protected $fillable = [
        'user_card_id',
        'bicycle_id',
        'start_station_id',
        'end_station_id',
        'start_time',
        'end_time',
        'trip_duration_min',
        'unlock_fee',
        'minute_rate',
        'total_trip_cost',
    ];

    protected function casts(): array
    {
        return [
            'start_time' => 'datetime',
            'end_time' => 'datetime',
            'trip_duration_min' => 'integer',
            'unlock_fee' => 'decimal:2',
            'minute_rate' => 'decimal:2',
            'total_trip_cost' => 'decimal:2',
        ];
    }

    public function bicycle(): BelongsTo
    {
        return $this->belongsTo(Bicycle::class);
    }

    public function userCard(): BelongsTo
    {
        return $this->belongsTo(UserCard::class);
    }

    public function startStation(): BelongsTo
    {
        return $this->belongsTo(
            Station::class,
            'start_station_id'
        );
    }

    public function endStation(): BelongsTo
    {
        return $this->belongsTo(
            Station::class,
            'end_station_id'
        );
    }
}
