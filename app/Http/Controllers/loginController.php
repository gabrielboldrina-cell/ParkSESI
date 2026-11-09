<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login_teste(Request $request){
        return view('login_teste');
    }
}
