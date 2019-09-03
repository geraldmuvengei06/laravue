<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
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
    protected $redirectTo = '/#/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
        
    }

    public function loginUser(Request $request)
    {

        // if user is already logged in

        $user = Auth::user();

        if ($user != null) {
            # code...
            return [
                'user' => $user,
                'message' => true
            ];

        }else{

            // validate credentials
            $this->validateLogin($request);
            
            // if log in is successiful
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                # code...
                return [
                    'user' => Auth::user(),
                    'message' => true
                ];
            }else{

                // if authentication fails
                return [
                    'message' => false
                ];
            }
            
        }
        
    }
}

