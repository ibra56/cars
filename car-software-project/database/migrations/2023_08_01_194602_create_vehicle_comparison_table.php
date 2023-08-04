<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleComparisonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_comparison', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_model_1')->constrained('cars')->onDelete('cascade');
            $table->foreignId('car_model_2')->constrained('cars')->onDelete('cascade');
            $table->json('comparison_attributes');
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
        Schema::dropIfExists('vehicle_comparison');
    }
}
