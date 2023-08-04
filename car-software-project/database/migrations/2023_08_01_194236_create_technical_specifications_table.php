<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_specifications', function (Blueprint $table) {
            $table->string('car_make');
            $table->string('car_model');
            $table->integer('car_year');
            $table->string('engine_specifications');
            $table->string('dimensions');
            $table->string('weight');
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
        Schema::dropIfExists('technical_specifications');
    }
}
