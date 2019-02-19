<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrolmentsTable extends Migration
{
  public function up()
  {
    Schema::create('enrolments', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('schoolyear_id');
      $table->unsignedInteger('student_id');
      $table->unsignedInteger('grade_id');
      $table->unsignedInteger('section_id');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('enrolments');
  }
}
