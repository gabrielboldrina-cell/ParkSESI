<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function CadastroController(Request $request){
        return view('CadastroUsuario');
    }

    public function salvar_usuario(Request $request){
    $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:usuarios',
        'senha' => 'required|string|',
        'tipo' => 'required|string',
    ]);

        try { 
            $usuario = new Usuario();
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->senha = Hash::make($request->senha);
            $usuario->tipo = $request->tipo;

            $usuario->save();

            return response()->json(['message' => 'Usuário cadastrado com sucesso!', 'erro' => 'n'], 200);

        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar usuário!', 'erro' => 's', 'msg_erro' => $th->getMessage()], 200);
        }

    }

    

}
