<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
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

    public function country()
    {
    	return $this->belongsTo('App\Country');
    }

    public function state()
    {
        return $this->belongsTo('App\State');
    }

    public function image()
    {
    	return $this->hasMany('App\Image');
    }

    public function review()
    {
    	return $this->hasMany('App\Review');
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function checkout()
    {
        return $this->hasMany('App\checkout');
    }

}
