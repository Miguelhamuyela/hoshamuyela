<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransPaymentAcademicYearsTabe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans_payment_academic_years', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_students_id');
            $table->foreign('fk_students_id')->references('id')->on('students')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_course_id');
            $table->foreign('fk_course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->string('startYear');
            $table->string('paymentForm', 255);
            $table->string('payment', 255);
            $table->string('month', 255);
            $table->string('paymentDetails', 255);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans_payment_academic_years_tabe');
    }
}
