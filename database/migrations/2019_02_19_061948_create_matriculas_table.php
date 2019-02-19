<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration
{
  public function up()
  {
    Schema::create('matriculas', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('schoolyear_id');
      $table->unsignedInteger('alumno_id');
      $table->unsignedInteger('grado_id');
      $table->unsignedInteger('seccion_id');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('matriculas');
  }
}
