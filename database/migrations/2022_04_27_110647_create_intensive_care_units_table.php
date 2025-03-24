<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntensiveCareUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intensive_care_units', function (Blueprint $table) {
            $table->id();
            $table->string('cause',255);
            $table->string('typePathology',255);
            $table->string('roomNumber',255);
            $table->string('bedNumber',255);
            $table->string('obs',255);

          
            $table->softDeletes();
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
        Schema::dropIfExists('intensive_care_units');
    }
}
