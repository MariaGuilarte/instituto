<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teaching extends Model
{
  public function teacher(){
    return $this->belongsTo('App\Teacher');
  }
  
  public function schoolyear(){
    return $this->belongsTo('App\Schoolyear');
  }
}
