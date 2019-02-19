<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionsTable extends Migration
{
  public function up()
  {
    Schema::create('calificacions', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('evaluation_id');
      $table->unsignedInteger('evaluation_id');
      $table->unsignedInteger('student_id');
      $table->integer('score');
      $table->timestamps();
    });
  }
  
  public function down()
  {
    Schema::dropIfExists('calificacions');
  }
}
