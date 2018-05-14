<?php namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Admin extends Model implements AuthenticatableContract,
    AuthorizableContract
{
    use Authenticatable, Authorizable;
    protected $table = 'admins';
    protected $hidden = array('password');
    protected $fillable = array(
        'name',
        'surname',
        'midname',
        'password',
        'access_level'
    );
}