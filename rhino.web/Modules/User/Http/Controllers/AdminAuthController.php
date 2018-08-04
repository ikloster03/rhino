<?php

namespace Modules\User\Http\Controllers;

use Modules\User\Http\Controllers\AuthController;
use Modules\User\Http\Requests\LoginRequest;
use Modules\User\Repositories\Admin\AdminAuthentication;
use Illuminate\Http\Request;

class AdminAuthController extends AuthController
{
    public function __construct(AdminAuthentication $auth)
    {
        $this->auth = $auth;
    }

    public function getLogin(Request $request){
            return view('user::admin.login');
    }

    public function postLogin(LoginRequest $request){
        return parent::processLogin($request);
    }

    public function logout(){
        $this->auth->logout();
        return redirect()->to('/admin');
    }
}