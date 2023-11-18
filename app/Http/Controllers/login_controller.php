<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_controller extends Controller
{
    public function login(){
        return view('layouts.auth-login-basic');
    }

    public function dashboard(){
        return view('layouts.dashboard-utama-rkakl');
    }

    public function satker(){
        return view('layouts.auth-kode-satker');
    }

    public function shopping(){
        return view('layouts.auth-shopping-page');
    }

    public function errorr(){
        return view('layouts.pages-misc-error');
    }

    public function updatesatker(){
        return view('layouts.auth-update-satker');
    }

    public function kodebelanja(){
        return view('layouts.auth-kode-belanja');
    }

    public function rkaklbelanja(){
        return view('layouts.auth-RKAKL-belanja-page');
    }
}
