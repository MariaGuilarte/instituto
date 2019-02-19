<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
  public function grade(){
    return $this->belongsTo('App\Grade');
  }
  
  public function enrolments(){
    return $this->belongsTo('App\Enrolment');
  }
  
  public function tests(){
    return $this->hasMany('App\Test');
  }
}
