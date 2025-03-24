<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportAcademicYearsTable extends Migration
{

    public function up()
    {
        Schema::create('transport_academic_years', function (Blueprint $table) {
            $table->id();
            $table->string('startYear');
            $table->string('routeName'); 
            $table->string('tel_student');
            $table->string('drive_tel');
            $table->string('driverName');
            $table->string('mark_mark');
            $table->unsignedBigInteger('fk_students_id');
            $table->foreign('fk_students_id')->references('id')->on('students')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_course_id');
            $table->foreign('fk_course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('transport_academic_years');
    }
}
