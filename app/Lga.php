<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    //
    public function ad()
    {
    	return $this->hasMany('App\Ad');
    }
}
