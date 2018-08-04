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
    public $timestamps = true;
    public $type = 1;
    protected $table = 'admin';
    protected $hidden = array('password');
    protected $fillable = array(
        'login',
        'name',
        'surname',
        'midname',
        'password',
        'access_level'
    );

    public function getErrors()
    {
        return $this->errors;
    }

    public function toFormData(){
        return [
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->email,
            'phone' => $this->phone,
        ];
    }
}