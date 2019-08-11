<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    public function question()
    {
    	return $this->belongsTo('\App\Question');
    }
}
