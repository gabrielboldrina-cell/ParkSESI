<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Veiculo;
use App\Models\Carro_colaborador;

class Carro_movimentacoes extends Model
{
    protected $table = 'carro_movimentacoes';

    public $timestamps = false;
    protected $fillable = [
        'carro_colaborador_id',
        'veiculo_id',
        'entrada',
        'saida',
    ];


    public function carro_colaborador_movimentacoes()
    {
        return $this->belongsTo(Carro_colaborador::class, 'carro_colaborador_id');
    }

    public function veiculo_movimentacoes()
    {
        return $this->belongsTo(Veiculo::class, 'veiculo_id');
    }

   
    

}
