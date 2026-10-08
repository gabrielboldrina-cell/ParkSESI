<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador;


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
            'situacao' => 'required|string|',
            'saida_almoco' => '|string|max:255',
            'volta_almoco' => '|string|max:255'
        ]);

        try{
            $colaborador = new Colaborador();
            $colaborador->nome = $request->nome;
            $colaborador->nif = $request->nif;
            $colaborador->email = $request->email;
            $colaborador->telefone = $request->telefone;
            $colaborador->departamento = $request->departamento;
            $colaborador->situacao = $request->situacao;
            $colaborador->saida_almoco = $request->saida_almoco;
            $colaborador->volta_almoco = $request->volta_almoco;

            $colaborador->save();

            return response ()->json(['message' => 'Colaborador cadastrado com sucesso!', 'erro' => 'n'], 200);
        }
        catch(\Throwable $th){
            return response ()->json(['message' => 'Erro ao cadastrar colaborador.', 'erro'  => $th->getMessage()], 200);
        }
    }

    public function listar_colaboradores(Request $request){
        $colaborador=Colaborador::all();
        return response()->json(['colaborador' => $colaborador], 200);
    } 

    public function alterar_colaborador(Request $request){

        $request->validate([
        'id' => 'required|integer|exists:colaborador,id',
        'nome' => 'required|string|max:255',
        'nif' => 'required|string|',
        'email' => 'required|string|email|max:255|',
        'telefone' => 'required|string|max:15',
        'departamento' => 'required|string|max:255',
        'situacao' => 'required|string|',
        'saida_almoco' => 'required|string|',
        'volta_almoco' => 'required|string|'
    ]);
    
        try { 

        $colaborador = Colaborador::find($request->id);

        if($colaborador->email != $request->cpf){
             $colaborador_email_igual = Colaborador::where('email', $request->email)->first();
            if($colaborador_email_igual){
                return response()->json(['message' => 'Email já cadastrado!', 'erro' => 's'], 200);
                }
            }
            $colaborador->nome = $request->nome;
            $colaborador->nif = $request->nif;
            $colaborador->email = $request->email;
            $colaborador->telefone = $request->telefone;
            $colaborador->departamento = $request->departamento;
            $colaborador->situacao = $request->situacao;
            $colaborador->saida_almoco = $request->saida_almoco;
            $colaborador->volta_almoco = $request->volta_almoco;

            $colaborador->save();

            return response()->json(['message' => 'Colaborador alterado com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar colaborador: ' . $th->getMessage(), 'erro' => 's'], 200);
        }
    }
    
    public function deletar_colaborador(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:colaborador,id',
        ]);
    
        try {
            $colaborador = Colaborador::find($request->id);
            $colaborador->delete();
    
            return response()->json(['message' => 'Colaborador deletado com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar colaborador: ' . $th->getMessage(), 'erro' => 's'], 300);
        }
    }   
    

}
