<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Line extends BaseModel
{
    use HasFactory;

    public function scopeParentLine($query): Builder
    {
        return $query->where('line_id', 0);
    }

    public function scopeLine($query): Builder
    {
        return $query->where('line_id', '<>', 0);
    }

    public function scopeStartToEnd($query): Builder
    {
        return $query->orderBy('line_id', 'ASC')->orderBy('order', 'ASC');
    }

    public function lines(): HasMany
    {
        return $this->hasMany(self::class)->StartToEnd();
    }

    public function getAllLintPointWithoutStopLine($parentLine): Builder
    {
        return self::StartToEnd()->Line()->where('line_id', $parentLine)->where('id', '<>', $this->id)->where('order', '>', $this->order);
    }
}
