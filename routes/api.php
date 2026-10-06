<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\UsuarioController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/usuario_cadastro', [UsuarioController::class, 'salvar_usuario']);
Route::post('/colaborador_cadastro', [ColaboradorController::class, 'salvar_colaborador']);