<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
  public function enrolment(){
    return $this->belongsTo('App\Enrolment');
  }
}
