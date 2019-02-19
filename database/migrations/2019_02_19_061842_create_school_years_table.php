<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolYearsTable extends Migration
{
  public function up()
  {
    Schema::create('school_years', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->integer('first_year');
      $table->integer('last_year');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('school_years');
  }
}
