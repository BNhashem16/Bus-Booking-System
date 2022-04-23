<?php

namespace App\Http\Resources\Trip;

use Illuminate\Http\Resources\Json\JsonResource;

class TripResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'start_from' => $this->getStartFromName(),
            'end_at'     => $this->getEndAtName(),
        ];
    }
}
