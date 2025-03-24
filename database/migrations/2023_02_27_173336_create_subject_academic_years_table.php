<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectAcademicYearsTable extends Migration
{
   
    public function up()
    {
        Schema::create('subject_academic_years', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('startYear');
            $table->unsignedBigInteger('fk_subjects_id');
            $table->foreign('fk_subjects_id')->references('id')->on('subjects')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->softDeletes();
            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('subject_academic_years');
    }
}
