<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentClassesTable extends Migration
{

    public function up()
    {
        Schema::create('student_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_students_id');
            $table->foreign('fk_students_id')->references('id')->on('students')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_departaments_id');
            $table->foreign('fk_departaments_id')->references('id')->on('departaments')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_course_id');
            $table->foreign('fk_course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_academic_years_id');
            $table->foreign('fk_academic_years_id')->references('id')->on('academic_years')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->string('classeName');
            $table->string('startTime');
            $table->string('endTime');
            $table->string('period');
            $table->softDeletes();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('student_classes');
    }
}
