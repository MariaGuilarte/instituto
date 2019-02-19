<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachingsTable extends Migration
{
  public function up()
  {
    Schema::create('teachings', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('schoolyear_id');
      $table->unsignedInteger('teacher_id');
      $table->unsignedInteger('subject_id');
      $table->unsignedInteger('section_id');
      $table->timestamps();
    });
  }
  
  public function down()
  {
    Schema::dropIfExists('teachings');
  }
}
