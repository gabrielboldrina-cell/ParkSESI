<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/CadastroColaborador', [ColaboradorController::class, 'CadastroController'])->name('CadastroColaborador');
Route::get('/CadastroUsuario', [UsuarioController::class, 'CadastroController'])->name('CadastroUsuario');
Route::get('/Index', [IndexController::class, 'Index'])->name('Index');
Route::get('/Dashboard', [Dashboard::class, 'Dashboard'])->name('Dashboard');