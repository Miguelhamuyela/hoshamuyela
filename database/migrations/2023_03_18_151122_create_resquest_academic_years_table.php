<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResquestAcademicYearsTable extends Migration
{
    public function up()
    {
        Schema::create('resquest_academic_years', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_students_id');
            $table->foreign('fk_students_id')->references('id')->on('students')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_course_id');
            $table->foreign('fk_course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_request_documents_id');
            $table->foreign('fk_request_documents_id')->references('id')->on('request_documents')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->string('startYear');
            $table->string('phone');
            $table->string('phoneAlt');
            $table->string('document');
            $table->string('documentLivel');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('resquest_academic_years');
    }
    
}
