<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class configController extends Controller
{
    public function configuracoes(request $request){
        return view('config');
    }
}
