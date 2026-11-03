<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserCard extends Model
{
    protected $fillable = [
        'card_id',
        'user_name',
        'balance',
    ];

    protected function casts(): array
    {
        return [
            'balance' => 'decimal:2',
        ];
    }

    public function setCardIdAttribute($value): void
    {
        $this->attributes['card_id'] = strtoupper(trim($value));
    }

    public function trips(): HasMany
    {
        return $this->hasMany(BikeTrip::class);
    }
}

