<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PainelGeralController;
use App\Http\Controllers\CadastroVeiculoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Recuperar_senhaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Hometeste;
use App\Http\Middleware\LogadoMiddleware;
use App\Http\Middleware\AdminLogadoMiddleware;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/CadastroColaborador', [ColaboradorController::class, 'CadastroController'])->middleware(AdminLogadoMiddleware::class)->name('CadastroColaborador');
Route::get('/CadastroUsuario', [UsuarioController::class, 'CadastroController'])->name('CadastroUsuario');
Route::get('/Index', [IndexController::class, 'Index'])->middleware(LogadoMiddleware::class)->name('Index');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(AdminLogadoMiddleware::class)->name('dashboard');
Route::get('/PainelGeral', [PainelGeralController::class, 'PainelGeral'])->middleware(AdminLogadoMiddleware::class)->name('PainelGeral');
Route::get('/CadastroVeiculo', [CadastroVeiculoController::class, 'CadastroVeiculoController'])->middleware(AdminLogadoMiddleware::class)->name('CadastroVeiculo');
Route::get('/Home', [HomeController::class, 'Home'])->name('Home')->middleware(AdminLogadoMiddleware::class);
Route::get('/Recuperar_senha', [Recuperar_senhaController::class, 'Recuperar_senha'])->name('Recuperar_senha');

//testes 
Route::get('/login_teste', [loginController::class, 'login_teste'])->name('login_teste');
Route::get('/Hometeste', [HomeController::class, 'home_teste'])->middleware(LogadoMiddleware::class)->name('Hometeste');

Route::get('/painel_teste', [AdminController::class, 'PainelGeral'])->middleware(AdminLogadoMiddleware::class)->name('PainelGeral');
