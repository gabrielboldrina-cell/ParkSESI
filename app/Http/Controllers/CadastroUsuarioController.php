<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroUsuarioController extends Controller
{
    public function cadastrar_usuario(request $request){

    $usuarios = Usuario::all();
        return view('CadastroUsuario_teste')->with('usuarios',$usuarios);
    }
    public function CadastroController(Request $request)
    {
        return view('CadastroUsuario');
    }
}
