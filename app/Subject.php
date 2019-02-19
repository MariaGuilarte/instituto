<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
  public function grade(){
    return $this->belongsTo('App\Grade');
  }
  
  public function test(){
    return $this->hasMany('App\Test');
  }
}