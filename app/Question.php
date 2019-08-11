<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function chapter()
    {
    	return $this->belongsTo('App\Chapter');
    }

    public function options()
    {
    	return $this->hasMany('\App\Option');
    }
}
