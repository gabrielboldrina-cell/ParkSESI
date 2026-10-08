<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroVeiculoController extends Controller
{
    public function CadastroVeiculoController(Request $request){
        return view('CadastroVeiculo');
    }
}
