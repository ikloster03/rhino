<?php

namespace Modules\User\Http\Controllers;

use Modules\User\Entities\Admin;
use Modules\User\Http\Controllers\AuthController;
use Modules\User\Http\Requests\Admin\AdminCreateRequest;
use Modules\User\Http\Requests\Admin\AdminUpdateRequest;
use Modules\User\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Modules\User\Repositories\Admin\AdminRepository;

class AdminController extends AuthController
{
    private $user;

    public function __construct(AdminRepository $user)
    {

        $this->user = $user;
    }

    public function index(Request $request)
    {

        $users = $this->user->allAdmin(array( 'sort' => 'created_at',
            'order' => 'DESC',
            'search' => ['surname', 'name', 'email', 'phone'],

        ));


        return response()->json($users);
    }
    public function search(Request $request)
    {
        return response()->json($this->user->search($request));
    }

    public function store(AdminCreateRequest $request)
    {

        $user = $this->user->create($request->all());
        return response()->json($user);
    }

    public function show(Admin $user)
    {
        $user->invite = $user->invite()->select(['token', 'last_send', 'type'])->first();
        return response()->json($user);
    }

    public function update(AdminUpdateRequest $request, Admin $user)
    {
        $this->user->update($user, $request->all());
        return response()->json($user);
    }

    public function resendInvite(Admin $partner){
        $invite = $this->user->resendInvite($partner, $partner->invite);
        if($invite) {
            return response()->json([
                'last_send' => $invite->last_send->format('Y-m-d H:i:s')
            ]);
        }else{
            abort(422, "Не удалось отправить сообщение, попробуйте позднее");
        }
    }

    public function destroy(Admin $user)
    {
        $this->user->destroy($user);
        return response()->json();

    }
}