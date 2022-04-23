<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends BaseModel
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function trip(): BelongsTo
    {
        return $this->BelongsTo(Trip::class);
    }

    public function getTripStartFromName(): string
    {
        return $this->trip->getStartFromName();
    }

    public function getTripEndAtName(): string
    {
        return $this->trip->getEndAtName();
    }
}
