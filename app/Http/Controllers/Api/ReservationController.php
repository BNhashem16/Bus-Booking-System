<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Http\Resources\Reservation\ReservationResource;
use App\Models\Reservation;
use App\Models\Trip;
use App\Services\ApiResponse;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        //
    }

    public function store(StoreReservationRequest $request)
    {
        $trip = Trip::findOrFail($request->trip_id);
        $reservation = Reservation::create([
            'line_id'   => $trip->line_id,
            'user_id'   => Auth::id(),
            'trip_id'   => $trip->id,
            'start_point'   => $trip->start_point,
            'end_point'   => $trip->end_point,
        ]);

        $reservation = new ReservationResource($reservation);

        return ApiResponse::success($reservation, 'Reservation successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReservationRequest  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
