<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherAcademicYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_academic_years', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_teachers_id');
            $table->foreign('fk_teachers_id')->references('id')->on('teachers')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_subjects_id');
            $table->foreign('fk_subjects_id')->references('id')->on('subjects')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_course_id');
            $table->foreign('fk_course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->string('startYear');
            $table->string('startTime');
            $table->string('endTime');
            $table->string('period');
            $table->longText('description');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_academic_years');
    }
}
