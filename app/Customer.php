<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customers';
    protected $fillable = ['id','name','phone','state','email'];
	 /**
     * Get Department.
     *
     * @var array
     */
    public function department()
    {
        return $this->hasMany('App\Department');
    }

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

}
