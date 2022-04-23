<?php

namespace App\Rules;

use App\Models\Line;
use App\Models\Reservation;
use App\Models\Trip;
use Illuminate\Contracts\Validation\Rule;

class CheckMaximumCapacityRule implements Rule
{
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return
     */

    // ! TODO --> some optimization should be here
    public function passes($attribute, $tripId)
    {
        // Errors container
        $returnValue = [];

        // Trip that user want to reserve
        $trip = Trip::find($tripId);
        $startPoint = $trip->start_point;
        $endPoint = $trip->end_point;

        // order of start point on trip line
        $orderStartPoint = Line::where('station_id', $startPoint)->value('order');

        // order of end point on trip line
        $orderEndPoint = Line::where('station_id', $endPoint)->value('order');

        // Test case 1: if user reserve such as all reservations
        // Ex: Reserve cairo - El Minya --> 12 times
        $countOfSameTrip = Reservation::where('line_id', $trip->line_id)->where('trip_id', $trip->id)->count();
        array_push($returnValue, $countOfSameTrip < Trip::MAXIMUM_CAPACITY);
        // ---------------------------------------------------------------------------------
        // counter variable to check status
        $checkForMiddlePoint = 0;
        $checkPointsBeforeReservationCheckTrue = 0;
        $checkPointsBeforeReservationCheckFalse = 0;
        // ----------------------------------------------------------------------------------
        // All Reservation in same line that user want to reserve a trip
        $reservations = Reservation::where('line_id', $trip->line_id)->get();
        foreach ($reservations as $key => $reservation) {
            $orderOfReservationStartPoint = Line::where('station_id', $reservation->start_point)->first();
            $orderOfReservationEndPoint = Line::where('station_id', $reservation->end_point)->first();

            // Test Case 2: if user want to reserve point between Two points and bus completed
            // Ex: Reserve cairo - El Minya --> 11 times & Al fayuom - Assuit --> 1 time

            $startPointOrderSmallerNewReservation = $orderOfReservationStartPoint->order <= $orderEndPoint;
            $endPointOrderSmallerNewReservation = $orderEndPoint <= $orderOfReservationEndPoint->order;
            if ($startPointOrderSmallerNewReservation && $endPointOrderSmallerNewReservation) {
                $checkForMiddlePoint += 1;
            }

            if ($orderOfReservationEndPoint->order < $orderEndPoint) {
                $checkPointsBeforeReservationCheckTrue += 1;
            } else {
                $checkPointsBeforeReservationCheckFalse += 1;
            }
        }
        // ----------------------------------------------------------------------------------
        array_push($returnValue, Trip::MAXIMUM_CAPACITY > $checkForMiddlePoint);

        return ! in_array(false, $returnValue);
    }

    public function message(): string
    {
        return 'The validation error message.';
    }
}
