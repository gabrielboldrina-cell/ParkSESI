<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CadastroVeiculoController;
use App\Http\Controllers\CarroColaboradorController;
use App\Http\Controllers\CarroMovimentacoesController;
use App\http\Middleware\AdminMiddleware;
use App\Http\Middleware\AdminLogadoMiddleware;

//Rotas para o CRUD de usuários
Route::post('/usuario_cadastro', [UsuarioController::class, 'salvar_usuario']);
Route::put('/alterar_usuario', [UsuarioController::class, 'alterar_usuario'])->middleware(AdminLogadoMiddleware::class);
Route::delete('/deletar_usuario', [UsuarioController::class, 'deletar_usuario'])->middleware(AdminLogadoMiddleware::class);
Route::get('/ver_usuario', [UsuarioController::class, 'ver_usuario'])->middleware(AdminLogadoMiddleware::class)->name('ver_usuario');
Route::get('/listar_usuarios', [UsuarioController::class, 'listar_usuarios'])->middleware(AdminLogadoMiddleware::class)->name('listar_usuarios');
Route::get('/listar_usuarios_simples', [UsuarioController::class, 'listar_usuarios_simples'])->middleware(AdminLogadoMiddleware::class)->name('listar_usuarios_simples');

//Rotas para o CRUD de colaboradores
Route::post('/salvar_colaborador', [ColaboradorController::class, 'salvar_colaborador']);
Route::put('/alterar_colaborador', [ColaboradorController::class, 'alterar_colaborador'])->middleware(AdminLogadoMiddleware::class);
Route::delete('/deletar_colaborador', [ColaboradorController::class, 'deletar_colaborador'])->middleware(AdminLogadoMiddleware::class);
Route::get('/listar_colaboradores', [ColaboradorController::class, 'listar_colaboradores'])->middleware(AdminLogadoMiddleware::class)->name('listar_colaboradores');
Route::get('/listar_colaboradores_simples', [ColaboradorController::class, 'listar_colaboradores_simples'])->middleware(AdminLogadoMiddleware::class)->name('listar_colaboradores_simples');

//Rotas para o CRUD de veículos
Route::post('/salvar_veiculo', [CadastroVeiculoController::class, 'salvar_veiculo']);
Route::put('/alterar_veiculo', [CadastroVeiculoController::class, 'alterar_veiculo'])->middleware(AdminLogadoMiddleware::class);
Route::delete('/deletar_veiculo', [CadastroVeiculoController::class, 'deletar_veiculo'])->middleware(AdminLogadoMiddleware::class);
Route::get('/listar_veiculos', [CadastroVeiculoController::class, 'listar_veiculos'])->middleware(AdminLogadoMiddleware::class)->name('listar_veiculos');
Route::get('/listar_veiculos_simples', [CadastroVeiculoController::class, 'listar_veiculos_simples'])->middleware(AdminLogadoMiddleware::class)->name('listar_veiculos_simples');

//Rotas para o CRUD de carros de colaboradores
Route::post('/salvar_CarroColaborador', [CarroColaboradorController::class, 'salvar_CarroColaborador']);
Route::put('/alterar_CarroColaborador', [CarroColaboradorController::class, 'alterar_CarroColaborador'])->middleware(AdminLogadoMiddleware::class);
Route::delete('/deletar_CarroColaborador', [CarroColaboradorController::class, 'deletar_CarroColaborador'])->middleware(AdminLogadoMiddleware::class);
Route::get('/listar_CarroColaborador', [CarroColaboradorController::class, 'listar_CarroColaborador'])->middleware(AdminLogadoMiddleware::class)->name('listar_CarroColaborador');

//Routas para o CRUD de movimentações de carros
Route::post('/salvar_CarroMovimentacoes', [CarroMovimentacoesController::class, 'salvar_CarroMovimentacoes']);
Route::put('/alterar_CarroMovimentacoes', [CarroMovimentacoesController::class, 'alterar_CarroMovimentacoes'])->middleware(AdminLogadoMiddleware::class);
Route::delete('/deletar_CarroMovimentacoes', [CarroMovimentacoesController::class, 'deletar_CarroMovimentacoes'])->middleware(AdminLogadoMiddleware::class);
Route::get('/listar_CarroMovimentacoes', [CarroMovimentacoesController::class, 'listar_CarroMovimentacoes'])->middleware(AdminLogadoMiddleware::class)->name('listar_CarroMovimentacoes');

//Rotas Login
Route::post('/login',[UsuarioController::class,'login']);
Route::post('/logout',[UsuarioController::class,'logout']);

