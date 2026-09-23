<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro_movimentacoes extends Model
{
    protected $table = 'carro_movimentacoes';

    protected $fillable = [
        'colaborador_id',
        'veiculo_id',
        'carro_colaborador_id',
        'entrada',
        'saída',
    ];
}
