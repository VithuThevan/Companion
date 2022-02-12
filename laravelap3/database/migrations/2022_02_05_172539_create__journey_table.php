<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJourneyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_journey', function (Blueprint $table) {
            $table->id();
            $table->date("Pick_up_date");
            $table->time("Pick_up_time");
            $table->string("Pick_up_location");
            $table->time("Respond_Time")->nullable();
            $table->string("Amount");
            $table->string("Payment_Mode");
            $table->foreignId("Company_ID")->nullable()->references("id")->on("_company");
            $table->foreignId("Driver_ID")->nullable()->references("id")->on("_driver");
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
        Schema::dropIfExists('_journey');
    }
}
