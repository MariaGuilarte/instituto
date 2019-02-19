<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrolment extends Model
{
  public function section(){
    return $this->belongsTo('App\Section');
  }
  
  public function student(){
    return $this->belongsTo('App\Student');
  }
  
  public function schoolyear(){
    return $this->belongsTo('App\Schoolyear');
  }
}
