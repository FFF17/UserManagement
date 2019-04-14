<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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

protected $maxAttempts = 2;
protected $decayMinutes = 0.5;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo() {
        if(Auth::user()->first_login == 'false'){

            return 'user/dashboard';
        }elseif(Auth::user()->role == 'superadmin'){
                        return 'superadmin/home';

        }else{

            return 'nasabah/index';
        }
    }

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
    return 'username';
}

}
