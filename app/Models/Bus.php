<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bus extends BaseModel
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
