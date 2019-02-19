<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
  public function up()
  {
    Schema::create('scores', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('test_id');
      $table->unsignedInteger('student_id');
      $table->integer('score');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('scores');
  }
}
