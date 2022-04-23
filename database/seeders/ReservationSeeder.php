<?php

namespace Database\Seeders;

use App\Models\Line;
use App\Models\Reservation;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $line = Line::Line()->first();
        foreach ($users as $key => $user) {
            $stopAt = $key + 1;

            if ($stopAt <= 11) {
                Reservation::create([
                    'line_id' => $line->line_id,
                    // 'trip_id' => Trip::whereIn,
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
