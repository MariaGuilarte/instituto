<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
  public function subject(){
    return $this->belongsTo('App\Subject');
  }
  
  public function schoolyear(){
    return $this->belongsTo('App\Schoolyear');
  }
  
  public function section(){
    return $this->belongsTo('App\Section');
  }
  
  public function scores(){
    return $this->hasMany('App\Score');
  }
}
