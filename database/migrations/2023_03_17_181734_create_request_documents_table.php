<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestDocumentsTable extends Migration
{

    public function up()
    {
        Schema::create('request_documents', function (Blueprint $table) {
            $table->id();
            $table->string('requestName');
            $table->longText('obs');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('request_documents');
    }
}
