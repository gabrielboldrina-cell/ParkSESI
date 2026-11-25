<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador;
use Illuminate\Support\Facades\Hash;
use App\Models\Carro_colaborador;

class DashboardController extends Controller
{
   public function Dashboard(Request $request){
        return view('dashboard');
        }

        public function tabela_html(Request $request){

    $dados = Carro_colaborador::select('colaborador.nome', 'colaborador.email',
     'colaborador.departamento', 'colaborador.situacao', 
    'colaborador.saida_almoco','colaborador.volta_almoco', 
    'veiculos.placa', 'veiculos.marca', 'veiculos.modelo', 'veiculos.cor',
    'veiculos.ano','carro_colaborador.colaborador_id', 
    'carro_colaborador.veiculos_id')
    ->leftjoin('colaborador',
     'carro_colaborador.colaborador_id','=', 'colaborador.id')
    ->leftjoin('veiculos', 
    'carro_colaborador.veiculos_id', '=', 'veiculos.id')->get();
        return view('dashboard')->with('dados', $dados);
    }


    
}

        
