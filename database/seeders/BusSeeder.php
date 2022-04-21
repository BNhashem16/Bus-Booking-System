<?php

namespace Database\Seeders;

use App\Models\Bus;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bus::create(['number' => '123 | ahr']);

        Bus::create(['number' => '159 | vgl']);

        Bus::create(['number' => '120 | wpl']);
    }
}
