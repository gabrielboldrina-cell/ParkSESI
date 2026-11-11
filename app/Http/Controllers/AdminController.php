<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function PainelGeral(Request $request){
        $usuario = $request->usuario;
        return view('painel_teste');
    }
}
