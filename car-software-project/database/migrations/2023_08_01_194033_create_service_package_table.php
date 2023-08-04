<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_package', function (Blueprint $table) {
            $table->id();
            $table->foreignId('auto_shop_id')->constrained('auto_shop')->onDelete('cascade');
            $table->string('package_name');
            $table->text('included_services');
            $table->decimal('pricing', 10, 2);
            $table->integer('duration'); // In days
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
        Schema::dropIfExists('service_package');
    }
}
