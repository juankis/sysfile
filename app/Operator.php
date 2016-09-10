<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
	protected $table = 'operators';
    protected $fillable = ['id','name', 'second_name','phone','address','user_id'];

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
