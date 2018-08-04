<?php namespace Modules\User\Http\Controllers;

use Illuminate\Cache\RateLimiter;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Modules\User\Http\Requests\LoginRequest;
use Nwidart\Modules\Routing\Controller;


class AuthController extends Controller {
    use ThrottlesLogins;


    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard()->user())
            ?: redirect()->intended($this->redirectPath());
    }

    /**
     * Авторизация пользователя
     * @param $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function processLogin($request){

        if ( $this->hasTooManyLoginAttempts($request)) {
            $seconds = app(RateLimiter::class)->availableIn(
                $this->throttleKey($request)
            );
            return response()->json(array('errors' => "У вас слишком много неудачных попыток входа. Попробуйте через ".$seconds." секунд"), 422);
        }

        $this->incrementLoginAttempts($request);
        if ( $this->auth->login($request->only('login', 'password'))) {

            $this->clearLoginAttempts($request);
            return response()
                ->json([
                    'auth' => true,
                    'redirect' =>  $request->session()->get('url.intended')
                ]);
        }else{
            abort(422,"Неправильный логин или пароль");
        }


        return response()->json(array('errors' => "Неправильный логин или пароль"), 422);


    }


    public function username()
    {
        return property_exists($this, 'login') ? $this->username : 'login';
    }

    public function logout(){
        $this->auth->logout();
        return redirect()->to('/');
    }


}