<?php
namespace Modules\User\Repositories;
use Illuminate\Contracts\Auth\Guard;
use Auth;

class Authentication{
    /**
     * @var Guard
     */
    protected  $guard;
    /**
     * @var UserRepository
     */
    private $repository;

    private $guardName = '';
    /**
     * @param Guard          $guard
     * @param UserRepository $repository
     */
    public function __construct($guardName){
        $this->guardName = $guardName;

        $this->guard = \Auth::guard($guardName);
    }


    public function loginUsingId($id, $remeber = false){
        $this->guard->loginUsingId($id, true);
    }
    public function logoutAll($withCurrent = true){
        if($withCurrent) {
            $this->logout();
        }
    }
    public function login(array $credentials, $remember = false)
    {
       if (!$this->guard->attempt($credentials, $remember, true)) {
                return false;
            }

        return true;
    }


    public function user(){
        return $this->guard->user();
    }

    public function assignRole($user, $role)
    {
        return $user->assignRole($role);
    }
    /**
     * Log the user out of the application.
     * @return bool
     */
    public function logout()
    {
        return $this->guard->logout();
    }
    /**
     * Activate the given used id
     * @param  int    $userId
     * @param  string $code
     * @return mixed
     */
    public function activate($userId, $code)
    {
        // TODO
    }
    /**
     * Create an activation code for the given user
     * @param  \Modules\User\Repositories\UserRepository $user
     * @return mixed
     */
    public function createActivation($user)
    {
        // TODO
    }
    /**
     * Create a reminders code for the given user
     * @param  \Modules\User\Repositories\UserRepository $user
     * @return mixed
     */
    public function createReminderCode($user)
    {
        // TODO
    }
    /**
     * Completes the reset password process
     * @param         $user
     * @param  string $code
     * @param  string $password
     * @return bool
     */
    public function completeResetPassword($user, $code, $password)
    {
        // TODO
    }
    /**
     * Determines if the current user has access to given permission
     * @param $permission
     * @return bool
     */
    public function hasAccess($permission)
    {
        return true;
    }
    /**
     * Check if the user is logged in
     * @return mixed
     */
    public function check()
    {


        if($this->guard->check()){

            return $this->guard->user();
        }
        return false;
    }
}