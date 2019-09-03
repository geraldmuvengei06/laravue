<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class InitController extends Controller
{
    //
    public function init()
    {
        # code...
        $user = Auth::user();

        return response()->json(['user' => $user], 200);
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
}
