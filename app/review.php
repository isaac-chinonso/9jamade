<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function usser()
    {
        return $this->belongsTo('App\User');
    }

    public function ad()
    {
    	return $this->hasMany('App\Ad');
    }
}
