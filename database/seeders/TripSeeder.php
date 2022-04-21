<?php

namespace Database\Seeders;

use App\Models\Line;
use App\Models\Trip;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstLine = Line::find(1);
        $firstLineStations = $firstLine->lines()->get();

        foreach ($firstLineStations as $key => $firstLineStation) {
            // \dd($firstLineStation);
            $nextStations = $firstLineStation->getAllLintPointWithoutStopLine($firstLineStation->line_id)->get();
            foreach ($nextStations as $key => $nextStation) {
                Trip::create([
                    'start_point' => $firstLineStation->station_id,
                    'end_point'   => $nextStation->station_id,
                ]);
            }
        }
    }
}
