<?php

use App\Models\Line;
use App\Models\Station;
use App\Models\Trip;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('line_id')->comment(Line::getTableName())->constrained(Line::getTableName())->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('trip_id')->constrained(Trip::getTableName())->cascadeOnDelete();
            $table->foreignId('start_point')->comment(Station::getTableName())->constrained(Station::getTableName())->cascadeOnDelete();
            $table->foreignId('end_point')->comment(Station::getTableName())->constrained(Station::getTableName())->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
