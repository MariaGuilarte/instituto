<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration
{
  public function up()
  {
    Schema::create('docentes', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('email');
      $table->string('phone_number');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('docentes');
  }
}
