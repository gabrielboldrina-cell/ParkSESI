<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador;
use Illuminate\Support\Facades\Hash;

class ColaboradorController extends Controller
{
    public function CadastroController(Request $request){
        return view('CadastroColaborador');
    }

    public function salvar_colaborador(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:colaboradores',
            'senha' => 'required|string|confirmed',
            'tipo' => 'required|string',
        ]);

        try{
            $colaborador = new Colaborador();
            $colaborador->nome = $request->nome;
            $colaborador->email = $request->email;
            $colaborador->senha = Hash::make($request->senha);
            $colaborador->tipo = $request->tipo;

            $colaborador->save();

            return response ()->json(['message' => 'Colaborador cadastrado com sucesso!', 'erro' => 'n'], 200);
        }
        catch(\Throwable $th){
            return response ()->json(['message' => 'Erro ao cadastrar colaborador.', 'erro' => 's'], 200);
        }
    }

}
