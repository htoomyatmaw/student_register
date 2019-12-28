<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rollno');
            $table->string('name');
            $table->string('student_nrc');
            $table->string('father_name');
            $table->string('father_nrc');
            $table->date('dob');
            $table->string('phone');
            $table->string('student_email');
            $table->string('address');
            $table->string('profile');
            $table->string('register_fee');

            $table->unsignedBigInteger('year_id');
            $table->unsignedBigInteger('major_id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');
            $table->foreign('major_id')->references('id')->on('majors')->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registerations');
    }
}
