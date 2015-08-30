<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profilies';
    protected $fillable = ['user_id', 'phone', 'cmnd'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
