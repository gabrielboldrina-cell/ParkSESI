<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Colaborador;
use App\Models\Veiculo;

class Carro_colaborador extends Model
{
    protected $table = 'carro_colaborador';

    public $timestamps = false;
    protected $fillable = [
        'colaborador_id',
        'veiculo_id',
    ];

    public function colaborador()
    {
        return $this->HasMany(Colaborador::class, 'colaborador_id');
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, 'veiculo_id');
    }
}
