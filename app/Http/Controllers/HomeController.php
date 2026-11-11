<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function home_teste(Request $request){
        $usuario = $request->usuario;
        return view('Hometeste')->with('usuario', $usuario);

    }
    public function mostrar_home(Request $request){
            $usuario = $request->usuario;
            return view('Hometeste')->with('usuario', $usuario);
    }

    public function Home(Request $request){
        return view('Home');
    }
}