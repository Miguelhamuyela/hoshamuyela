<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRectorsTable extends Migration
{

    public function up()
    {
        Schema::create('rectors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastName');
            $table->string('phone');
            $table->string('email');
            $table->string('schooling');
            $table->string('specialty');
            $table->string('beginning');
            $table->string('end');
            $table->string('SecondarySchooling');
            $table->string('superior');
            $table->string('address');
            $table->string('dateBirth');
            $table->string('language');
            $table->longText('image');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('rectors');
    }
}
