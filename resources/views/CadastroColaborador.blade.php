@extends('layouts.login')
@section('title', 'Cadastro de Colaborador')

@section('content')
<link rel="stylesheet" href="{{ asset('CadastroColaborador.css') }}">


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">

                <div class="bg-parksesi text-white rounded-5 shadow-lg p-4 p-md-5">
                    <h2 class="fw-bold mb-1">Cadastro de colaborador</h2>
                    <p class="mb-4 opacity-75">Preencha os dados abaixo para cadastrar um novo colaborador.</p>

                    <form method="POST" action="#"> 

                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label for="email" class="form-label fw-semibold small">Email</label>
                                <input type="email" class="form-control form-control-lg rounded-4"
                                       id="email" name="email" placeholder="nome@exemplo.com">
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="nome" class="form-label fw-semibold small">Nome completo</label>
                                <input type="text" class="form-control form-control-lg rounded-4"
                                       id="nome" name="nome" placeholder="Digite o nome completo">
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="departamento" class="form-label fw-semibold small">Departamento</label>
                                <input type="text" class="form-control form-control-lg rounded-4"
                                       id="departamento" name="departamento" placeholder="Ex.: RH">
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="telefone" class="form-label fw-semibold small">Telefone</label>
                                <input type="tel" class="form-control form-control-lg rounded-4"
                                       id="telefone" name="telefone" placeholder="(15) 12345-7890">
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="situacao" class="form-label fw-semibold small">Situação</label>
                                <select id="situacao" name="situacao" class="form-select form-select-lg rounded-4">
                                    <option value="ativo" selected>Ativo</option>
                                    <option value="inativo">Inativo</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="nif" class="form-label fw-semibold small">NIF</label>
                                <input type="text" class="form-control form-control-lg rounded-4"
                                       id="nif" name="nif" placeholder="Digite o NIF do colaborador">
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
