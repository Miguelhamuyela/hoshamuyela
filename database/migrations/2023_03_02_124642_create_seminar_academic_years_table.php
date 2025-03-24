<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarAcademicYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminar_academic_years', function (Blueprint $table) {
            $table->id();
            $table->string('startYear');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('typeHoliday');
            $table->unsignedBigInteger('fk_holidays_id');
            $table->foreign('fk_holidays_id')->references('id')->on('holidays')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->longText('obs');
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
        Schema::dropIfExists('seminar_academic_years');
    }
}
