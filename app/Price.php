<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
	public $timestamps = false;

    protected $fillable = [
    	'uah', 'usd', 'eur'
    ];

    public function getUahAttribute($value)
    {
    	return $value / 100;
    }

    public function setUahAttribute($value)
    {
    	$price = $value * 100;
        $this->attributes['uah'] = (int) $price;
    }

    public function getUsdAttribute($value)
    {
    	return $value / 100;
        
    }

    public function setUsdAttribute($value)
    {
    	$price = $value * 100;
        $this->attributes['usd'] = (int) $price;
    }

    public function getEurAttribute($value)
    {
    	return $value / 100;
        
    }

    public function setEurAttribute($value)
    {
    	$price = $value * 100;
        $this->attributes['eur'] = (int) $price;
    }
}
