<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_vehicle__owner', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->string("NIC");
            $table->string("Contact_Number");
            $table->string("Email");
            $table->string("Address");
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
        Schema::dropIfExists('_vehicle__owner');
    }
}
