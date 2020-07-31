<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    //
    public function product()
    {
    	return $this->hasMany('App\Product');
    }
}
