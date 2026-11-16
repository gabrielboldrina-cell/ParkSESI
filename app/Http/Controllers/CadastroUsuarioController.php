<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroUsuarioController extends Controller
{
    public function cadastrar_usuario(request $request){
        return view('CadastroUsuario_teste');
    }
    public function CadastroController(Request $request)
    {
        return view('CadastroUsuario');
    }
}
