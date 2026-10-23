<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PainelGeralController;
use App\Http\Controllers\CadastroVeiculoController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/CadastroColaborador', [ColaboradorController::class, 'CadastroController'])->name('CadastroColaborador');
Route::get('/CadastroUsuario', [UsuarioController::class, 'CadastroController'])->name('CadastroUsuario');
Route::get('/Index', [IndexController::class, 'Index'])->name('Index');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/PainelGeral', [PainelGeralController::class, 'PainelGeral'])->name('PainelGeral');
Route::get('/CadastroVeiculo', [CadastroVeiculoController::class, 'CadastroVeiculoController'])->name('CadastroVeiculo');
Route::get('/Home', [HomeController::class, 'Home'])->name('Home');

