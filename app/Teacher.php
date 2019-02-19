<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  public function teachings(){
    return $this->hasMany('App\Teaching');
  }
}
