<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referent extends Model
{
	protected $table = 'referents';
    protected $fillable = ['id','name','phone', 'ci', 'email', 'autorization', 'state','department_id'];

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
