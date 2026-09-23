<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro_colaborador extends Model
{
    protected $table = 'carro_colaborador';

    protected $fillable = [
        'colaborador_id',
        'veiculo_id',
    ];
}
