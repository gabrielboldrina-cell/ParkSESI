<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CadastroVeiculoController;
use App\Http\Controllers\CarroColaboradorController;
use App\Http\Controllers\CarroMovimentacoesController;

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
Route::get('/listar_colaboradores_simples', [ColaboradorController::class, 'listar_colaboradores_simples'])->name('listar_colaboradores_simples');


//Rotas para o CRUD de veículos
Route::post('/salvar_veiculo', [CadastroVeiculoController::class, 'salvar_veiculo']);
Route::put('/alterar_veiculo', [CadastroVeiculoController::class, 'alterar_veiculo']);
Route::delete('/deletar_veiculo', [CadastroVeiculoController::class, 'deletar_veiculo']);
Route::get('/listar_veiculos', [CadastroVeiculoController::class, 'listar_veiculos'])->name('listar_veiculos');
Route::get('/listar_veiculos_simples', [CadastroVeiculoController::class, 'listar_veiculos_simples'])->name('listar_veiculos_simples');

//Rotas para o CRUD de carros de colaboradores
Route::post('/salvar_CarroColaborador', [CarroColaboradorController::class, 'salvar_CarroColaborador']);
Route::put('/alterar_CarroColaborador', [CarroColaboradorController::class, 'alterar_CarroColaborador']);
Route::delete('/deletar_CarroColaborador', [CarroColaboradorController::class, 'deletar_CarroColaborador']);
Route::get('/listar_CarroColaborador', [CarroColaboradorController::class, 'listar_CarroColaborador'])->name('listar_CarroColaborador');    

//Routas para o CRUD de movimentações de carros
Route::post('/salvar_CarroMovimentacoes', [CarroMovimentacoesController::class, 'salvar_CarroMovimentacoes']);
Route::put('/alterar_CarroMovimentacoes', [CarroMovimentacoesController::class, 'alterar_CarroMovimentacoes']);
Route::delete('/deletar_CarroMovimentacoes', [CarroMovimentacoesController::class, 'deletar_CarroMovimentacoes']);
Route::get('/listar_CarroMovimentacoes', [CarroMovimentacoesController::class, 'listar_CarroMovimentacoes'])->name('listar_CarroMovimentacoes');

