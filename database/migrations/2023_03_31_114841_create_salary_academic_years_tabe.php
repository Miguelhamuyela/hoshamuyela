<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryAcademicYearsTabe extends Migration
{

    public function up()
    {
        Schema::create('salary_academic_years', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_teachers_id');
            $table->foreign('fk_teachers_id')->references('id')->on('teachers')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->string('startYear');
            $table->string('joiningDate');
            $table->string('amount');
            $table->string('month');
            $table->string('genro');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('salary_academic_years');
    }
}
