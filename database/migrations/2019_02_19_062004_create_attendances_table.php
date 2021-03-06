<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
  public function up()
  {
    Schema::create('attendances', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('enrolment_id');
      $table->unsignedInteger('subject_id');
      $table->unsignedInteger('overall');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('attendances');
  }
}
