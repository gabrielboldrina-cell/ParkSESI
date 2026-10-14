<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Carro_colaborador;

class Veiculo extends Model
{
    protected $table = 'veiculos';

    public $timestamps = false;
    protected $fillable = [
        'placa',
        'marca',
        'modelo',
        'cor',
        'ano',
    ];

    public function carro_colaborador()
    {
        return $this->hasMany(Carro_colaborador::class, 'veiculo_id');
    }
}
