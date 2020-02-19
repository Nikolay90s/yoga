<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    public function ftco(){
      	return $this->belongsTo('App\Ftco');
    }
}