<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\PainelGeralController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/CadastroColaborador', [ColaboradorController::class, 'CadastroController'])->name('CadastroColaborador');
Route::get('/CadastroUsuario', [UsuarioController::class, 'CadastroController'])->name('CadastroUsuario');
Route::get('/Index', [IndexController::class, 'Index'])->name('Index');
Route::get('/dashboard', [Dashboard::class, 'dashboard'])->name('dashboard');
Route::get('/painel_geral', [PainelGeralController::class, 'painel_geral'])->name('painel_geral');