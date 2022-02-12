<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_vehicle', function (Blueprint $table) {
            $table->id();
            $table->string("Plate_Number");
            $table->foreignId("Vehicle_Owner_ID")->nullable()->references('id')->on('_vehicle__owner');
            $table->foreignId("Vehicle_Driver_ID")->nullable()->references('id')->on('_driver');
            $table->string("Registered_Date");
            $table->foreignId("Vehicle_Type_ID")->references('id')->on('_vehicle__type');
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
        Schema::dropIfExists('_vehicle');
    }
}
