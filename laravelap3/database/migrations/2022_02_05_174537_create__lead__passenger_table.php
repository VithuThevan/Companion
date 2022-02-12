<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadPassengerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_lead__passenger', function (Blueprint $table) {
            $table->id();
            $table->foreignId("Journey_ID")->references("id")->on("_journey");
            $table->foreignId("Company_ID")->references("id")->on("_company");
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
        Schema::dropIfExists('_lead__passenger');
    }
}
