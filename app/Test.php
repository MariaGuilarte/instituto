<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
  public function subject(){
    return $this->belongsTo('App\Subject');
  }
}
