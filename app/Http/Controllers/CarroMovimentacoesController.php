<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro_movimentacoes;

class CarroMovimentacoesController extends Controller
{
    public function salvar_CarroMovimentacoes(Request $request)
    {
        $request->validate([
            'carro_colaborador_id' => 'required|integer',
            'veiculo_id' => 'required|integer',
            'entrada' => 'required',
            'saida' => 'required|',
        ]);

        try {
            $carroMovimentacao = new Carro_movimentacoes();
            $carroMovimentacao->carro_colaborador_id = $request->carro_colaborador_id;
            $carroMovimentacao->veiculo_id = $request->veiculo_id;
            $carroMovimentacao->entrada = $request->entrada;
            $carroMovimentacao->saida = $request->saida;

            $carroMovimentacao->save();

            return response()->json(['message' => 'Movimentação de carro cadastrada com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao cadastrar movimentação de carro.', 'erro'  => $th->getMessage()], 200);
        }
    }

    public function listar_CarroMovimentacoes(Request $request)
    {
        $carroMovimentacoes = Carro_movimentacoes::all();
        return response()->json(['carroMovimentacoes' => $carroMovimentacoes], 200);
    }

    public function alterar_CarroMovimentacoes(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:carro_movimentacoes,id',
            'carro_colaborador_id' => 'required|integer',
            'veiculos_id' => 'required|integer',
            'entrada' => 'required',
            'saida' => 'required|',
        ]);

        try {
            $carroMovimentacao = Carro_movimentacoes::find($request->id);
            $carroMovimentacao->carro_colaborador_id = $request->carro_colaborador_id;
            $carroMovimentacao->veiculo_id = $request->veiculo_id;
            $carroMovimentacao->entrada = $request->entrada;
            $carroMovimentacao->saida = $request->saida;

            $carroMovimentacao->save();

            return response()->json(['message' => 'Movimentação de carro alterada com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao alterar movimentação de carro.', 'erro'  => $th->getMessage()], 200);
        }
    }

    public function ver_CarroMovimentacoes(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);
        $carroMovimentacao = Carro_movimentacoes::find($request->id);
        if ($carroMovimentacao) {
            return response()->json(['carroMovimentacao' => $carroMovimentacao, 'erro' => 'n'], 200);
        } else {
            return response()->json(['message' => 'Movimentação de carro não encontrada!', 'erro' => 's'], 200);
        }
    }

    public function deletar_CarroMovimentacoes(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:carro_movimentacoes,id',
        ]);

        try {
            $carroMovimentacao = Carro_movimentacoes::find($request->id);
            $carroMovimentacao->delete();

            return response()->json(['message' => 'Movimentação de carro deletada com sucesso!', 'erro' => 'n'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Erro ao deletar movimentação de carro.', 'erro'  => $th->getMessage()], 200);
        }
    }
}
