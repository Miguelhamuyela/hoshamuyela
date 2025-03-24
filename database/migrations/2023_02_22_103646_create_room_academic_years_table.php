<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAcademicYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_academic_years', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->string('headRoom');
            $table->string('RoomState');
            $table->string('startYear');
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
        Schema::dropIfExists('room_academic_years');
    }
}
