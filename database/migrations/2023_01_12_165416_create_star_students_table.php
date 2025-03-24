<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('star_students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('borthday');
            $table->string('address');
            $table->string('tel');
            $table->string('genro');
            $table->longText('description');
            $table->unsignedBigInteger('fk_academic_years_id');
            $table->foreign('fk_academic_years_id')->references('id')->on('academic_years')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_course_id');
            $table->foreign('fk_course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_academic_livels_id');
            $table->foreign('fk_academic_livels_id')->references('id')->on('academic_livels')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_classes_id');
            $table->foreign('fk_classes_id')->references('id')->on('classes')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->softDeletes();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('star_students');
    }
}
