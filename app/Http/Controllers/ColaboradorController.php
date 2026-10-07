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
            'nif' => 'required|string|',
            'email' => 'required|string|email|max:255',
            'telefone' => 'required|string|max:15',
            'departamento' => 'required|string|max:255',
            'situacao' => 'required|string|'
        ]);

        try{
            $colaborador = new Colaborador();
            $colaborador->nome = $request->nome;
            $colaborador->nif = $request->nif;
            $colaborador->email = $request->email;
            $colaborador->telefone = $request->telefone;
            $colaborador->departamento = $request->departamento;
            $colaborador->situacao = $request->situacao;

            $colaborador->save();

            return response ()->json(['message' => 'Colaborador cadastrado com sucesso!', 'erro' => 'n'], 200);
        }
        catch(\Throwable $th){
            return response ()->json(['message' => 'Erro ao cadastrar colaborador.', 'erro'  => $th->getMessage()], 200);
        }
    }
/* 
        if($usuario->cpf != $request->cpf){
        $usuario_cpf_igual = Usuario::where('cpf', $request->cpf)->first();
        if($usuario_cpf_igual){
            return response()->json(['message' => 'CPF já cadastrado!', 'erro' => 's'], 200);
        }*/
}
