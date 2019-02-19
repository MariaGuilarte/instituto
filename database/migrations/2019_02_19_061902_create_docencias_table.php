<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocenciasTable extends Migration
{
  public function up()
  {
    Schema::create('docencias', function (Blueprint $table) {
      $table->increments('id');
      $table->unsignedInteger('schoolyear_id');
      $table->unsignedInteger('docente_id');
      $table->unsignedInteger('asignatura_id');
      $table->unsignedInteger('seccion_id');
      $table->timestamps();
    });
  }
  
  public function down()
  {
    Schema::dropIfExists('docencias');
  }
}
