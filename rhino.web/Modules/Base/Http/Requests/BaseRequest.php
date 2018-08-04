<?php namespace Modules\Base\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;
class BaseRequest extends FormRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

    public function response(array $errors)
    {

        foreach ($errors as $key => $value){
            $array = explode('.', $key);
            if(count($array) > 1){
                if(!isset($errors[$array[0]])){
                    $errors[$array[0]]  =[];

                }
                $errors[$array[0]][$array[1]] = $value;
                unset($errors[$key]);
            }

        }
        if ($this->ajax() || $this->wantsJson()) {

            return response()->json(array("errors"=>$errors), 422);

        }
        return $this->redirector->to($this->getRedirectUrl())
            ->withInput($this->except($this->dontFlash))
            ->withErrors($errors, $this->errorBag);
    }

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
		];
	}

}
