<?php namespace Modules\User\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Base\Http\Requests\BaseRequest;

class AdminCreateRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login' => 'required|unique:login',
            'role' => 'required',
            'name'       => 'required',
            'password'   => 'required|min:6|same:password_confirm',
            'password_confirm'  => 'required|min:6'
        ];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    public function messages()
    {
        return [
            'login.unique' => "Email уже зарегистрирован",
            'login.required' => "Введите адрес Email",
            'role.required' => "Выберите роль",
            'name.required' => "Введите вашe имя",
            'password.required' => "Введите пароль",
            'password.same' => "Пароли и подтверждение пароля не совпадают",
            'password_confirm.required' => "Введите подтверждение пароля",
        ];
    }
}