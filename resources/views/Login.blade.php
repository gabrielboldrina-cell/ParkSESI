@extends('layouts.login')
@section('title', 'Cadastro de Usuario')


@section('content')
@vite ('resources/js/login.js')
@vite ('resources/js/Index.js')
    
<div class="container fg-black">
        <div class="row justify-content-center">
            <div class="col-6 rounded border p-3 shadow-sm bg-inverse mt-2">
                <h3 class="mt-3 text-center fg-black">Login</h3>
                <div class="mb-3">
                    <label for="email" class="form-label fg-black">Email </label>
                    <input type="email" class="form-control form-control-sm" id="email"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Informe seu email cadastrado.</div>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label fg-black">Senha</label>
                    <input type="password" class="form-control form-control-sm" id="senha"
                        aria-describedby="senhaHelp">
                </div>

                <button type="button" class="btn-subtle theme-accent" id="entrar" >Entrar</button>

            </div>
        </div>



    </div>