<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use NodeTrait;
    use SoftDeletes;

    public function chapters()
    {
    	return $this->hasMany('App\Chapter');
    }
}
