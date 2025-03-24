<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCoursesTable extends Migration
{

    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('fk_students_id');
            $table->foreign('fk_students_id')->references('id')->on('students')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_academic_livels_id');
            $table->foreign('fk_academic_livels_id')->references('id')->on('academic_livels')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_classes_id');
            $table->foreign('fk_classes_id')->references('id')->on('classes')->onDelete('CASCADE')->onUpgrade('CASCADE');
            
            $table->unsignedBigInteger('fk_classrooms_id');
            $table->foreign('fk_classrooms_id')->references('id')->on('classrooms')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->string('originParish');
            $table->string('startYear');
            $table->longText('email');
            $table->longText('phone');
            $table->longText('detail');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('student_courses');
    }
}
