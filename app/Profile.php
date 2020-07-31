<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
     public function user()
    {
        return $this->hasMany('App\User');
    }

     public function review()
    {
    	return $this->hasMany('App\review');
    }
}
