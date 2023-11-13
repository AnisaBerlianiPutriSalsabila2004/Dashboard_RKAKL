<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_controller extends Controller
{
    public function dashboard(){
        return view('layouts.dashboard-utama-rkakl');
    }

    public function satker(){
        return view('layouts.auth-kode-satker');
    }

    public function shopping(){
        return view('layouts.auth-shopping-page');
    }
}
