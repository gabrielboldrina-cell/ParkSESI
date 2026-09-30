<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador;

class UsuarioController extends Controller
{
    public function CadastroController(Request $request){
        return view('CadastroUsuario');
    }
}
