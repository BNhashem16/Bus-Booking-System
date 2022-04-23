<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Resources\Reservation\ReservationResource;
use App\Models\Reservation;
use App\Models\Trip;
use App\Services\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(StoreReservationRequest $request): JsonResponse
    {
        $trip = Trip::findOrFail($request->trip_id);
        $reservation = Reservation::create([
            'line_id'     => $trip->line_id,
            'user_id'     => Auth::id(),
            'trip_id'     => $trip->id,
            'start_point' => $trip->start_point,
            'end_point'   => $trip->end_point,
        ]);

        $reservation = new ReservationResource($reservation);

        return ApiResponse::success($reservation, 'Successfully!');
    }
}
