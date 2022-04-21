<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line extends Model
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
        return $query->line()->orderBy('line_id', 'ASC')->orderBy('order', 'ASC');
    }
}
