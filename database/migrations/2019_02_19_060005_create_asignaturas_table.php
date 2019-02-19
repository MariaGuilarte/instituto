<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturasTable extends Migration
{
  public function up()
  {
    Schema::create('asignaturas', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->unsignedInteger('grado_id');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('asignaturas');
  }
}
