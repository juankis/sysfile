<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referent extends Model
{
    /**
    * Get Cunstomer.
    *
    * @var array
    */

    public function department()
    {
    	return $this->belongsTo('App\Department');
    }
}
