<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
  //stops mass assignment
    protected $fillable = ['username'];
}
