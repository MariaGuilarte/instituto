<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
  public function up()
  {
    Schema::create('tests', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('schoolyear_id');
      $table->unsignedInteger('grade_id');
      $table->unsignedInteger('section_id');
      $table->unsignedInteger('subject_id');
      $table->integer('rate');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('tests');
  }
}
