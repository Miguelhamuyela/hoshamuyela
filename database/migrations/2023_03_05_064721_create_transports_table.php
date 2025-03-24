<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{

    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->string('mark');
            $table->string('model');
            $table->string('color');
            $table->string('plate');
            $table->string('fuel');
            $table->string('acquired');
            $table->longText('obs');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transports');
    }
}
