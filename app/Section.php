<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
  public function grade(){
    return $this->belongsTo('App\Grade');
  }
}
