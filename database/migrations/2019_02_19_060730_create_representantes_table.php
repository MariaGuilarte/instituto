<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentantesTable extends Migration
{
  public function up()
  {
    Schema::create('representantes', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('email');
      $table->string('phone_number');
      $table->string('address');
      $table->date('birthdate');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('representantes');
  }
}
