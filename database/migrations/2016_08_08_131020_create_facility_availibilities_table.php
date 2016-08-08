<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilityAvailibilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility_availibilities', function (Blueprint $table) {
            $table->increments('availibility_id');
            $table->integer('facility_id')->unsigned();
            $table->dateTime('date_time');
            $table->smallInteger('duration');
            $table->timestamps();

            $table->foreign('facility_id')->references('facility_id')->on('facilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('facility_availibilities');
    }
}
