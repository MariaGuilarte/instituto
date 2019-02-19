<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
  public function up()
  {
    Schema::create('agents', function (Blueprint $table) {
      $table->increments('id');
      $table->string('dni');
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
    Schema::dropIfExists('agents');
  }
}
