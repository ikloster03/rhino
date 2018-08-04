<?php namespace Modules\User\Http\Requests\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Modules\Base\Http\Requests\BaseRequest;

class AdminRegisterRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login' => 'required|unique:admin,login',
            'name'       => 'required',
            'surname'       => 'required',
            'password'   => 'required|min:6|same:password_confirm',
            'password_confirm'  => 'required'
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
            'login.unique'=> "Логин уже существует",
            'login.required' => "Введите login",
            'name.required' => "Введите вашe имя",
            'surname.required' => "Введите вашy фамилию",
            'password.required' => "Введите пароль",
            'password.same' => "Пароли и подтверждение пароля не совпадают",
            'password_confirm.required' => "Введите подтверждение пароля",
            'password.min' => "Минимальная длина пароля 6 символов",
        ];
    }
}