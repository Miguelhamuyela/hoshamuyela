<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicYearsTable extends Migration
{

    public function up()
    {
        Schema::create('academic_years', function (Blueprint $table) {

            $table->id();
            $table->string('startYear');
            $table->longText('obs');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('academic_years');
    }
}
