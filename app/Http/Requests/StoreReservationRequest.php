<?php

namespace App\Http\Requests;

use App\Models\Reservation;
use App\Models\Trip;
use App\Rules\CheckMaximumCapacityRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreReservationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // \dd($this->trip_id);
        // $trip = Reservation::where('trip_id', $this->trip_id)

        return [
            'trip_id' => [
                'required',
                Rule::exists(Trip::getTableName(), 'id'),
                // Rule::unique(Reservation::getTableName())->where(function ($query) {
                //     return $query->where('user_id', Auth::id())->where('trip_id', $this->trip_id);
                // }),
                new CheckMaximumCapacityRule,
            ],
        ];
    }
}
