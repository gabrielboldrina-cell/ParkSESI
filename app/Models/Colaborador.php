<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
