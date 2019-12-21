<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rollno');
            $table->string('name');
            $table->string('student_nrc');
            $table->string('father_name');
            $table->string('father_nrc');
            $table->date('dob');
            $table->string('phone');
            $table->string('address');
            $table->string('profile');

            $table->unsignedBigInteger('year_id');
            $table->longText('book_id');
            $table->unsignedBigInteger('major_id');
            $table->unsignedBigInteger('activity_id');

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
        Schema::dropIfExists('students');
    }
}
