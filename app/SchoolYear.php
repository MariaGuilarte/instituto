<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolyear extends Model
{
  public function teachings(){
    return $this->hasMany('App\Teaching');
  }
  
  public function enrolments(){
    return $this->hasMany('App\Enrolment');
  }
  
  public function tests(){
    return $this->hasMany('App\Tests');
  }
}
