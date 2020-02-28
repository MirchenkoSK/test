<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name', 'image'
    ];

    public function price()
    {
        return $this->hasOne('App\Price')->withDefault([
            'uah' => '0',
            'usd' => '0',
            'eur' => '0'
        ]);
    }
}
