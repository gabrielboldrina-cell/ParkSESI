<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(Request $request){
        $usuario = $request->usuario;
            $admin = $request->admin;
        return view('Index')->with('usuario', $usuario)->with('admin', $admin);
    }
}
