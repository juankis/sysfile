<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    protected $fillable = ['id','address','phone', 'location', 'postal_code', 'customer_id'];

        /**
     * Get Customer.
     *
     * @var array
     */
    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }
}
