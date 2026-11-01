<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Recuperar_senhaController extends Controller
{
    public function Recuperar_senha(Request $request){
        return view('Recuperar_senha');
    }
}
