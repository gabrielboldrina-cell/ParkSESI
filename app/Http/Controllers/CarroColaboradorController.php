<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro_colaborador;

class CarroColaboradorController extends Controller
{
    public function salvar_CarroColaborador(Request $request)
    {
        $request->validate([
            'colaborador_id' => 'required|integer',
            'veiculos_id' => 'required|integer',
        ]);

        try {
            $carroColaborador = new Carro_colaborador();
            $carroColaborador->colaborador_id = $request->colaborador_id;
            $carroColaborador->veiculos_id = $request->veiculos_id;

            $carroColaborador->save();

            return response()->json(['message' => 'Carro do colaborador cadastrado com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar carro do colaborador.', 'erro'  => $th->getMessage()], 200);
        }
    }

    public function listar_CarroColaborador(Request $request)
    {
        $carroColaborador = Carro_colaborador::all();
        return response()->json(['carroColaborador' => $carroColaborador], 200);
    }

    public function alterar_CarroColaborador(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:carro_colaborador,id',
            'colaborador_id' => 'required|integer',
            'veiculos_id' => 'required|integer',
        ]);

        try {
            $carroColaborador = Carro_colaborador::find($request->id);
            $carroColaborador->colaborador_id = $request->colaborador_id;
            $carroColaborador->veiculos_id = $request->veiculos_id;

            $carroColaborador->save();

            return response()->json(['message' => 'Carro do colaborador alterado com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar carro do colaborador.', 'erro'  => $th->getMessage()], 200);
        }
    }

    public function deletar_CarroColaborador(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:carro_colaborador,id',
        ]);

        try {
            $carroColaborador = Carro_colaborador::find($request->id);
            $carroColaborador->delete();

            return response()->json(['message' => 'Carro do colaborador deletado com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar carro do colaborador.', 'erro'  => $th->getMessage()], 200);
        }
    }

    public function ver_CarroColaborador(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);
        $carroColaborador = Carro_colaborador::find($request->id);
        if ($carroColaborador) {
            return response()->json(['carroColaborador' => $carroColaborador, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Carro do colaborador não encontrado!', 'erro' => 's'], 200);
        }
    }

    public function listar_CarroColaborador_simples(Request $request)
    {
        $carroColaborador = Carro_colaborador::select('colaborador_id', 'veiculo_id')->get();
        return response()->json(['carroColaborador' => $carroColaborador], 200);
    }   

}
