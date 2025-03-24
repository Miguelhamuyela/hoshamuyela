<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypePaymentsTable extends Migration
{

    public function up()
    {
        Schema::create('type_payments', function (Blueprint $table) {
            $table->id();
            $table->string('typePagament');
            $table->longText('obs');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_payments');
    }
}
