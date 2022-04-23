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
    public function passes($attribute, $tripId)
    {
        $returnValue = [];
        $trip = Trip::find($tripId); // 5
        $startPoint = $trip->start_point; // 181 --> Fayoum
        $endPoint = $trip->end_point; // 266 --> Assuit

        $orderStartPoint = Line::where('station_id', $startPoint)->value('order'); // 2
        $orderEndPoint = Line::where('station_id', $endPoint)->value('order'); // 4

        $line = Line::find(1);
        $points = $line->lines()->get();

        $checkPointsBeforeReservationCheckTrue = 0;
        $checkPointsBeforeReservationCheckFalse = 0;
        $reservations = Reservation::where('line_id', $line->id)->get();
        foreach ($reservations as $key => $reservation) {
            $orderOfReservationStartPoint = Line::where('station_id', $reservation->start_point)->first(); // 1
            $orderOfReservationEndPoint = Line::where('station_id', $reservation->end_point)->first(); // 3

            /*
             * First check
             * if past reservation end point sort smaller than future reservation end point
             * * pass this case
             */
            if ($orderOfReservationEndPoint->order < $orderEndPoint) {
                $checkPointsBeforeReservationCheckTrue += 1;
            } else {
                $checkPointsBeforeReservationCheckFalse += 1;
            }
        }

        /*
         * Second check if cases in check points before reservation return numbers
         */
        array_push($returnValue, $checkPointsBeforeReservationCheckTrue >= $checkPointsBeforeReservationCheckFalse);

        array_push($returnValue, $checkPointsBeforeReservationCheckFalse < Trip::MAXIMUM_CAPACITY);
        // \dd($returnValue);
        \dd($checkPointsBeforeReservationCheckTrue, $checkPointsBeforeReservationCheckFalse);
        // \dd(! in_array(false, $returnValue));

        // $firstCheck = Trip::MAXIMUM_CAPACITY - $numberOfPassengersOnTrip; // true if 4 > 3

        return ! in_array(false, $returnValue);
    }

    public function message(): string
    {
        return 'The validation error message.';
    }
}
