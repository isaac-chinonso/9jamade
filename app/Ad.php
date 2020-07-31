<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Ad extends Model
{
    //
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ],
        ];
    }
    
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function state()
    {
    	return $this->belongsTo('App\State');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function lga()
    {
        return $this->belongsTo('App\Lga');
    }

    public function image()
    {
    	return $this->hasMany('App\Images');
    }

    public function review()
    {
    	return $this->hasMany('App\review');
    }

}
