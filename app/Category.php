<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['cate_name'];

    public function products()
    {
    	return $this->belongsToMany('App\Product');
    }
}
