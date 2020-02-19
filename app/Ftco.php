<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ftco extends Model
{
    public function check(){
      	return $this->hasMany('App\Check');
    }
}