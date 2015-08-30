<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

     /**
     * Get the role record associated with the user.
     */
    public function role()
    {
        return $this->hasOne('App\Role', 'id', 'role_id');
    }

     /**
     * Check is the current user has access to the required permission.
     *
     * @param $allowed
     * @return bool
     */
    public function checkPermissions($allowed)
    {
        echo "<pre>";
        print_r($allowed);
        $permissions = $this->role->getPermissionsForModule($allowed[0]);
        
        return true;
    }

    /**
     * @param $area
     * @return bool
     */
    public function hasAccess($area)
    {
        $arr = explode(":", $area);
        if (! $this->role || ! $this->checkPermissions($arr)) {
            return false;
        }

        return true;
    }
}
