<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questionnaire extends Model
{
  //sets as mass assignable
  protected $fillable = [
          'id',
          'made_by',
          'question_id',
          'name',
          'category',
      ];
  public function users()
  {
    // The questionnaire table has a one relationship with the user table
      return $this->belongsTo('App\user');
  }
  public function questions()
  {
    //The questionnaire table has a many relationship with the question table
      return $this->belongsToMany('App\question');
  }
}
