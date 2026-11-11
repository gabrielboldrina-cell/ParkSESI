<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function home_teste(Request $request){
        $usuario = $request->usuario;
        $admin = $request->admin;
        return view('Hometeste')->with('usuario', $usuario)->with('admin', $admin);
    }
    public function mostrar_home(Request $request){
            $usuario = $request->usuario;
            $admin = $request->admin;
            return view('Hometeste')->with('usuario', $usuario)->with('admin', $admin);
    }

    public function Home(Request $request){
        return view('Home');
    }
}