<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_schedule', function (Blueprint $table) {
            $table->id();
            $table->string('car_make');
            $table->string('car_model');
            $table->integer('car_year');
            $table->text('recommended_maintenance_tasks');
            $table->text('intervals');
            $table->integer('mileage_thresholds');
            // Add other relevant columns here
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
        Schema::dropIfExists('maintenance_schedule');
    }
}
