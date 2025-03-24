<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father');
            $table->string('mather');
            $table->string('borthday');
            $table->string('identification');
            $table->string('arquivIdentification');
            $table->string('placeBaptism');
            $table->string('baptismDate');
            $table->string('confirmLocation');
            $table->string('confirmDate');
            $table->string('address');
            $table->string('inCharge');
            $table->string('tel');
            $table->string('originParish');
            $table->string('receseciament');
            $table->string('dateIssue');
            $table->string('genro');
            $table->string('censusdate');
            $table->string('municipeName');
            $table->string('startYear');
            $table->unsignedBigInteger('fk_course_id');
            $table->foreign('fk_course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_provinces_id');
            $table->foreign('fk_provinces_id')->references('id')->on('provinces')->onDelete('CASCADE')->onUpgrade('CASCADE');

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
        Schema::dropIfExists('students');
    }
}
