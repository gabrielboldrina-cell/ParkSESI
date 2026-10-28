<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;   
use App\Models\Usuario;

class Usertoken extends Model
{
    protected $table = 'user_token';

    protected $fillable = [
        'usuario_id',
        'token',
        'valido_ate',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

}
