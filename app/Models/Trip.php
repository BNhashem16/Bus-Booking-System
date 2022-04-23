<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trip extends BaseModel
{
    use HasFactory;

    public const MAXIMUM_CAPACITY = 4;

    public function startPoint(): BelongsTo
    {
        return $this->belongsTo(Station::class, 'start_point');
    }

    public function endPoint(): BelongsTo
    {
        return $this->belongsTo(Station::class, 'end_point');
    }

    public function getStartFromName(): string
    {
        return $this->startPoint->name_en;
    }

    public function getEndAtName(): string
    {
        return $this->endPoint->name_en;
    }
}
