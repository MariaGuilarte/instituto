<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teaching extends Model
{
  public function schoolyear(){
    return $this->belongsTo('App\Schoolyear');
  }
  
  public function teacher(){
    return $this->belongsTo('App\Teacher');
  }
  
  public function subject(){
    return $this->belongsTo('App\Subject');
  }
}
