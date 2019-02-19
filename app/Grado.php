<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
  public function sections(){
    return $this->hasMany('App\Section');
  }
  
  public function subjects(){
    return $this->hasMany('App\Subject');
  }
}
