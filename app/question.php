<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
  //sets as mass assignable
  protected $fillable = [
        'id',
        'question',
    ];

  public function questionnaire()
 {
   //The question table has a many relationship with the questionnaire table
     return $this->belongsToMany('App\questionnaire');
 }
 public function answers()
 {
   //The question table has a many relationship with the answer table
     return $this->belongsToMany('App\answer');
 }
 public function responses()
{
}
}
