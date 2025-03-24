<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastName');
            $table->string('tel');
            $table->string('email');
            $table->string('address');
            $table->string('typeContract');
            $table->string('genro');
            $table->string('birthDate');
            $table->string('qualification');
            $table->longText('experience');
            $table->string('country');
            $table->string('city');
            $table->string('especiality');
            $table->string('academicGrau');
            $table->string('startYear');
            $table->string('language');
            $table->softDeletes();
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
