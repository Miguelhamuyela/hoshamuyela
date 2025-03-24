<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarStudentAcademicYearsTable extends Migration
{

    public function up()
    {
        Schema::create('star_student_academic_years', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('room');
            $table->string('startYear');
            $table->string('from');
            $table->string('image');
            $table->unsignedBigInteger('fk_students_id');
            $table->foreign('fk_students_id')->references('id')->on('students')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_course_id');
            $table->foreign('fk_course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_classes_id');
            $table->foreign('fk_classes_id')->references('id')->on('classes')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('star_student_academic_years');
    }
}
