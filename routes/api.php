<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Dashboard;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Rotas para o CRUD de usuários
Route::post('/usuario_cadastro', [UsuarioController::class, 'salvar_usuario']);
Route::put('/alterar_usuario', [UsuarioController::class, 'alterar_usuario']);
Route::delete('/deletar_usuario', [UsuarioController::class, 'deletar_usuario']);
Route::get('/ver_usuario', [UsuarioController::class, 'ver_usuario'])->name('ver_usuario');
Route::get('/listar_usuarios', [UsuarioController::class, 'listar_usuarios'])->name('listar_usuarios');
Route::get('/listar_usuarios_simples', [UsuarioController::class, 'listar_usuarios_simples'])->name('listar_usuarios_simples');

//Rotas para o CRUD de colaboradores
Route::post('/salvar_colaborador', [ColaboradorController::class, 'salvar_colaborador']);
Route::put('/alterar_colaborador', [ColaboradorController::class, 'alterar_colaborador']);
Route::delete('/deletar_colaborador', [ColaboradorController::class, 'deletar_colaborador']);
Route::get('/listar_colaboradores', [ColaboradorController::class, 'listar_colaboradores'])->name('listar_colaboradores');
