<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
  public function grade(){
    return $this->belongsTo('App\Grade');
  }
}
