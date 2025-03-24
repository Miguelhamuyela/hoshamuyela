<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{

    public function up()
    {

        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('proviceName');
            $table->unsignedBigInteger('fk_municipes_id');
            $table->foreign('fk_municipes_id')->references('id')->on('municipes')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->longText("obs");
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}

