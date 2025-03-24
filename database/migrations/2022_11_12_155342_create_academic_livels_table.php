<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicLivelsTable extends Migration
{

    public function up()
    {
        Schema::create('academic_livels', function (Blueprint $table) {
            $table->id();
            $table->string('academicLeveisName');
            $table->string('obs');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('academic_livels');
    }
}
