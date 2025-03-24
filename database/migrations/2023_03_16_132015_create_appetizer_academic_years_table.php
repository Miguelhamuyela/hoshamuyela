<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppetizerAcademicYearsTable extends Migration
{
  
    public function up()
    {
        Schema::create('appetizer_academic_years', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_rectors_id');
            $table->foreign('fk_rectors_id')->references('id')->on('rectors')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_partners_id');
            $table->foreign('fk_partners_id')->references('id')->on('partners')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->string('startYear');
            $table->string('Productname');
            $table->string('qty');
            $table->longText('obs');
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
        Schema::dropIfExists('appetizer_academic_years');
    }
}


