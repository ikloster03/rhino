<?php namespace Modules\User\Repositories\Admin;

use DB;
use DateTime;
use Modules\User\Repositories\BaseUserRepository;

class AdminRepository extends BaseUserRepository
{
    public function create($data)
    {
        $this->model->fill($data);
        $this->model->password = !empty($data['password']) ? \Hash::make($data['password']): "";
        $this->model->save();

        return $this->model;
    }
    /**
     * @param $model
     * @param  array  $data
     * @return object
     */

    public function update($model, $data)
    {

        if(!empty($data['login'])) {
            if ($data['login'] != $model->email) {
                if ($this->model->where('login', '=', $data['login'])->first()) {
                    abort(422, 'login|Login уже занят');
                }
            }
        }
        if(!empty($data['password'])){
            if($data['password'] != $data['password_confirm']){
                abort(422, 'password_confirm|Пароли не совпадают');
            }
            $model->password = \Hash::make($data['password']);
        }
        $data['type'] = 1;
        $model->fill($data);

        if(!empty($data['password'])){
            if($data['password'] != $data['password_confirm']){
                abort(422, 'password_confirm|Пароли не совпадают');
            }
            $model->password = \Hash::make($data['password']);
        }
        $model->save();

        return $model;
    }

}