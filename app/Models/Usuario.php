<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'tipo',
        'imagem'
    ];

    public function admin()
    {
        return $this->hasMany(Admin::class, 'usuario_id');
    }
}
