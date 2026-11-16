<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function Login(Request $request){
        return view('Login');
    }
}
