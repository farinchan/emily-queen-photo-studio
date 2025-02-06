<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.login');
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')->withInput()->withErrors($validator);
        }

        $email = $request->input('email');
        $password = $request->input('password');

        // Attempt to authenticate using the determined login type
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('back.dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Username/Email and password are incorrect, please try again');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
}
