<?php

namespace Database\Seeders;

use App\Models\Line;
use App\Models\Station;
use Illuminate\Database\Seeder;

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ------------------------------------- Start First Line --------------------------------------------
        $firstLine = Line::create([
            'name' => 'First Line',
            'line_id' => 0,
        ]);

        $fayom = Line::create([
            'line_id' => $firstLine->id,
            'station_id' =>  Station::find(181)->id,
            'order' =>  2,
        ]);

        $assuit = Line::create([
            'line_id' => $firstLine->id,
            'station_id' =>  Station::find(266)->id,
            'order' =>  4,
        ]);

        $cairo = Line::create([
            'line_id' => $firstLine->id,
            'station_id' =>  Station::find(17)->id,
            'order' =>  1,
        ]);

        $cairo = Line::create([
            'line_id' => $firstLine->id,
            'station_id' =>  Station::find(219)->id,
            'order' =>  3,
        ]);

        // ------------------------------------- End First Line --------------------------------------------

        // ------------------------------------- Start Second Line --------------------------------------------
        $secondLine = Line::create([
            'name' => 'Second Line',
            'line_id' => 0,
        ]);

        $may = Line::create([
            'line_id' => $secondLine->id,
            'station_id' =>  Station::find(1)->id,
            'order' =>  1,
        ]);

        $zaytoun = Line::create([
            'line_id' => $secondLine->id,
            'station_id' =>  Station::find(9)->id,
            'order' =>  4,
        ]);

        $azbakeyah = Line::create([
            'line_id' => $secondLine->id,
            'station_id' =>  Station::find(2)->id,
            'order' =>  2,
        ]);

        $basatin = Line::create([
            'line_id' => $secondLine->id,
            'station_id' =>  Station::find(3)->id,
            'order' =>  3,
        ]);

        // ------------------------------------- End Second Line --------------------------------------------
    }
}
