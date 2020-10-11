<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
  //sets as mass assignable
  protected $fillable = [
        'id',
        'answer',
    ];

  public function questions()
  {
    // The answer table has a many relationship with the question table
      return $this->belongsToMany('App\question');
  }
 public function responses()
{
  //The answer table has a many relationship with the response table
    return $this->hasMany('App\response');
}
}
