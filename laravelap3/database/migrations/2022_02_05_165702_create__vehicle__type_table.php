<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_vehicle__type', function (Blueprint $table) {
                $table->id();
                $table->year("Year_Of_Make");
                $table->string("Model");
                $table->string("Engine Capacity");
                $table->string("Odometer")->nullable();
                $table->integer("Seating Capacity");
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
        Schema::dropIfExists('_vehicle__type');
    }
}
