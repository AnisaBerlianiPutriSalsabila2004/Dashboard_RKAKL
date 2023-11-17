<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class Login_Controller extends Controller
{
    public function test()
    {
        return view('dashboard.sidebar');
    }
    public function test2()
    {
        return view('dashboard.login');
    }
    public function test3()
    {
        return view('dashboard.profile');
    }
    public function login(){
        return view('layouts.auth-login-basic');
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
               'email' => 'required', 'email',
               'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
             $request->session()->regenerate();
             return redirect()->route('dashboard');
        }else{
            dd("fail");
        }
        return back()->withErrors([
             'email' => 'The provided credentials do not match our records',
        ])->onlyInput('email');
  }

   public function dashboard(){
       
       if (Auth::check()) {
           return view('layouts.dashboard-utama-rkakl');
       }
       return redirect()->route('login')
       ->withErrors(['You are not allowed to access',]);

   }

   public function logout(Request $request){
       Auth::logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken();
       return redirect()->route('login')
       ->withSuccess("You have logged out");
   }
}
