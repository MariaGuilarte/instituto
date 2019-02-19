<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  public function agent(){
    return $this->belongsTo('App\Agent');
  }
  
  public function enrolments(){
    return $this->hasMany('App\Enrolment');
  }
}
