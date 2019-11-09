<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chapter extends Model
{
    use NodeTrait;
    use SoftDeletes;

    public function course()
    {
    	return $this->belongsTo('App\Course');
    }

    public function questions()
    {
    	return $this->hasMany('App\Question');
    }

    public function content()
    {
        return $this->hasOne('App\Content');
    }
}
