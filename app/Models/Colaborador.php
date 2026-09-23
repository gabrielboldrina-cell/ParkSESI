<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    protected $table = 'colaborador';

    protected $fillable = [
        'nome',
        'nif',
        'email',
        'telefone',
        'departamento',
        'situacao',
    ];
}
