<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherSubjectsTable extends Migration
{

    public function up()
    {
        Schema::create('teacher_subjects', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('fk_teachers_id');
            $table->foreign('fk_teachers_id')->references('id')->on('teachers')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_course_id');
            $table->foreign('fk_course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_academic_livels_id');
            $table->foreign('fk_academic_livels_id')->references('id')->on('academic_livels')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_classes_id');
            $table->foreign('fk_classes_id')->references('id')->on('classes')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_classrooms_id');
            $table->foreign('fk_classrooms_id')->references('id')->on('classrooms')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->string('subjectName');
            $table->longText('phone');
            $table->longText('detail');
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
        Schema::dropIfExists('teacher_subjects');
    }
}
