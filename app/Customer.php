<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	 /**
     * Get Department.
     *
     * @var array
     */
    public function department()
    {
        return $this->hasMany('App\Department');
    }
}
