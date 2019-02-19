<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionsTable extends Migration
{
  public function up()
  {
    Schema::create('evaluacions', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('schoolyear_id');
      $table->unsignedInteger('schoolyear_id');
      $table->unsignedInteger('subject_id');
      $table->unsignedInteger('subject_id');
      $table->unsignedInteger('grade_id');
      $table->unsignedInteger('classroom_id');
      $table->integer('percentage');
      $table->timestamps();
    });
  }
  
  public function down()
  {
    Schema::dropIfExists('evaluacions');
  }
}
