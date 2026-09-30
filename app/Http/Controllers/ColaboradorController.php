<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador;

class ColaboradorController extends Controller
{
    public function CadastroController(Request $request){
        return view('CadastroColaborador');
    }

}
