<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['pro_name'];

    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }
}
