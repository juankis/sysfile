<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * Get Customer.
     *
     * @var array
     */
    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }

    /**
    * Get Referent.
    *
    * @var array
    */

    public function referent()
    {
    	return $this->hasMany('App\Referent');
    }
}
