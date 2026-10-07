@extends('layouts.login')
@section('title', 'Cadastro de Usuario')


@section('content')
    <link rel="stylesheet" href="{{ asset('CadastroUsuario.css') }}">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">

                <div class="bg-parksesi text-white rounded-5 shadow-lg p-4 p-md-5">
                    <h2 class="fw-bold mb-1">Cadastro de usuário</h2>
                    <p class="mb-4 opacity-75">Preencha os dados abaixo para criar uma nova conta no sistema da portaria.</p>

                    <form method="POST" action="#"> {{-- troque pelo action da sua rota --}}
                        @csrf

                        <div class="row g-3">
                            <div class="col-12">
                                <label for="email" class="form-label fw-semibold small">Email</label>
                                <input type="email" class="form-control form-control-lg rounded-4" id="email"
                                    name="email" placeholder="nome@exemplo.com">
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="nome" class="form-label fw-semibold small">Nome</label>
                                <input type="text" class="form-control form-control-lg rounded-4" id="nome"
                                    name="nome" placeholder="Digite seu nome completo">
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="tipo" class="form-label fw-semibold small">Tipo</label>
                                <select id="tipo" name="tipo" class="form-select form-select-lg rounded-4">
                                    <option value="administrador" selected>Administrador</option>
                                    <option value="porteiro">Porteiro</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="senha" class="form-label fw-semibold small">Senha</label>
                                <input type="password" class="form-control form-control-lg rounded-4" id="senha"
                                    name="senha" placeholder="Digite sua senha">
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-dark rounded-pill px-4">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
