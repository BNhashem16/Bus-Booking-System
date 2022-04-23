<?php

namespace App\Http\Resources\Reservation;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'         => $this->id,
            'start_from' => $this->getTripStartFromName(),
            'end_at'     => $this->getTripEndAtName(),
        ];
    }
}
