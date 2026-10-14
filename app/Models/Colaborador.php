<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Carro_colaborador;

class Colaborador extends Model
{
    protected $table = 'colaborador';

    public $timestamps = false;
    protected $fillable = [
        'nome',
        'nif',
        'email',
        'telefone',
        'departamento',
        'situacao',
        'saida_almoco',
        'volta_almoco',
    ];

    public function carro_colaborador()
    {
        return $this->HasMany(Carro_colaborador::class, 'colaborador_id');
    }
}


