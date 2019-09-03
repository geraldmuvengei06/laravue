<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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

    public function user()
    {
        # code...
        $user = Auth::user();
        // $user = \App\User::get();

        if ($user != NULL) {
            # code...
            return [
                'user' => $user,
                'message' => true,
            ];
        }else{

            return [
                'message' => false,
            ];
        }
    }

    public function init()
    {
        # code...
        $user = Auth::user();

        return response()->json(['user' => $user], 200);
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

