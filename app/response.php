<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class response extends Model
{
  public function questions()
  {
    //The response table has a many relationship with the question table
      return $this->belongsTo('App\question');
  }
  public function answers()
  {
    //The response table has a many relationship with the answer table
      return $this->belongsTo('App\answer');
  }
}
