<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
	/**
     * Get User.
     *
     * @var array
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
