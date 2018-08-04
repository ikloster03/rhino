<?php namespace Modules\User\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Modules\Base\Http\Requests\BaseRequest;

class AdminUpdateRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'name'       => 'required',

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
            'email.required' => "Введите адрес Email",
            'email.email' => "Email неправильного формата",
            'company_name.required' => "Введите адрес Email",
            'inn.required' => "Введите ИНН вашей организации",
            'phone.required' => "Введите ваш телефон",
            'name.required' => "Введите вашe имя",
            'password.required' => "Введите пароль",
            'password.same' => "Пароли и подтверждение пароля не совпадают",
            'password_confirm.required' => "Введите подтверждение пароля",
        ];
    }
}