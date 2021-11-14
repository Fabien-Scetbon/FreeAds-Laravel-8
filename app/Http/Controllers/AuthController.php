<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.signin');
    }


    public function createSignin(Request $request)
    {
        $request->validate([
            'login'    => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('login', 'password');
        //dd($credentials);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->with('success', 'Logged-in');
        }
        return redirect("login")->with('success', 'Credentials are wrong.');
    }


    public function signup()
    {
        return view('auth.signup');
    }


    public function customSignup(Request $request)
    {
        $request->validate([

            'email'                 => 'bail|required|unique:users',
            'login'                 => 'bail|required|between:4,8|',
            'phone_number'          => 'bail|required|digits:10',
            'nickname'              => 'bail|required|between:5,20|alpha',
            'password'              => 'bail|required|confirmed|min:8',
            'password_confirmation' => 'bail|required',

        ]);
        $data = $request->all();

        $this->createUser($data);
        return redirect("dashboard")->with('success', 'Successfully logged-in!');
    }


    public function createUser(array $data)
    {

        //dd($data);
        User::create([

            'login'        => $data['login'],
            'phone_number' => $data['phone_number'],
            'nickname'     => $data['nickname'],
            'email'        => $data['email'],
            'password'     => Hash::make($data['password']),

        ]);
    }


    public function dashboardView()
    {
        if (Auth::check()) {
            return view('auth.dashboard');
        }
        return redirect("login")->withSuccess('Access is not permitted');
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}
