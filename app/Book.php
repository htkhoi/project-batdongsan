<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    protected $table = 'books';
    protected $dates = ['deleted_at'];

    protected $fillable = ['title', 'author'];

    public function scopeBookForTitle($query)
    {
        return $query->where('id', 7)
                ->where('author', 'Nguyen Van B');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
