<?php namespace Modules\User\Http\Controllers;



use Modules\User\Http\Requests\Admin\AdminRegisterRequest;
use Modules\User\Repositories\Admin\AdminAuthentication;
use Modules\User\Repositories\Admin\AdminRepository;
use Nwidart\Modules\Routing\Controller;


class AdminRegistrationController extends Controller {


    private $user;

    public function __construct(AdminRepository $user)
    {
        $this->user = $user;
    }


    public function postRegistration(AdminRegisterRequest $request){
        $user = $this->user->create($request->all());
        if($user){
            return response()->json(array('success' => true));
        }else{
            abort(422, "Произошла ошибка при регистрации. Попробуйте зарегистрироваться позднее");
        }
    }

}