<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\ServiceResponse;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'name';
    }

    public function login(Request $request)
    {
        try {
            $username = config('app.kkysUser');
            $password = config('app.kkysPassword');

            $sr = ServiceResponse::setUserAttributesFromService($username, $password);
            //            $serviceResponse = ServiceResponse::setUserAttributesFromService($credentials['name'], $credentials['password']);

        } catch (\Exception $exception) {
            dd('http://192.168.0.186:94/SunumService.svc/KullaniciDogrulama servisi calismiyor.');
            echo $exception->getMessage();
        }

        $this->validateLogin($request);
        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }


        //        $credentials = $this->credentials($request);
        //        if (app()->isLocal()) {
        //            $user = User::query()->where('name', $credentials['name'])->first();
        //            \Auth::login($user);
        //            $this->clearLoginAttempts($request);
        //
        //            return $this->sendLoginResponse($request);
        //        }

        $serviceResponse = null;  // ServiceResponse::setUserAttributesFromService($credentials['name'], $credentials['password']);


        //todo: 571571
        if ($serviceResponse && $serviceResponse->Durum == 0) {
            $user = User::setAttributesFromService($serviceResponse->Sonuc, $credentials['name']);
            $projectList = $user->setProjectListFromService(); //571571 check this with cron not from service
            $user->estateProject()->sync($projectList->pluck('id'));
            \Auth::login($user);
            $this->clearLoginAttempts($request);

            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

}
