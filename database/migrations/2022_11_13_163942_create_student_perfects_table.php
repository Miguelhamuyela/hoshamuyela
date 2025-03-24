<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentPerfectsTable extends Migration
{

    public function up()
    {
        Schema::create('student_perfects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastName');
            $table->string('tel');
            $table->string('email');
            $table->string('academic');
            $table->longText('description');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('student_perfects');
    }
}
