<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_controller extends Controller
{
    public function login(){
        return view('layouts.dashboard-utama-rkakl');
    }
}
