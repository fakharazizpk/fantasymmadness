<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use hash;
class AuthController extends Controller
{
    public function login() {
        return view('admin/login');
    }
    public function postlogin(Request $request)
    {

        if (Auth::attempt($request->only('email', 'password'))) {
            return view('admin.main');
        } else {
            dd('dffdffds');
        }
    }

    public function logout(){

    }
}
