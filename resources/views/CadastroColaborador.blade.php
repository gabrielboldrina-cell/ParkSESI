@extends('layouts.login')
@section('title', 'Cadastro de Colaborador')

@section('content')
<link rel="stylesheet" href="{{ asset('CadastroColaborador.css') }}">


<main class="cadastro-colaborador-page d-flex align-items-center justify-content-center">
    <section class="card-cadastro" aria-labelledby="titulo-cadastro">
        <h1 id="titulo-cadastro" class="titulo-cadastro">Cadastro de Colaborador</h1>

        <div class="row g-3">
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com">
            </div>
            <div class="col-md-6">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome completo">
            </div>
            <div class="col-md-6">
                <label for="departamento" class="form-label">Departamento</label>
                <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Ex: RH">
            </div>
            <div class="col-md-6">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" class="form-control" maxlength="15" id="telefone" name="telefone" placeholder="(15) 12345-7890">
            </div>
            <div class="col-md-6">
                <label for="situacao" class="form-label">Situação</label>
                <input type="text" class="form-control" id="situacao" name="situacao" placeholder="Ex: Ativo">
            </div>
            <div class="col-md-6">
                <label for="nif" class="form-label">NIF</label>
                <input type="text" class="form-control" id="nif" name="nif" placeholder="NIF...">
            </div>
            <div class="col-12 mt-4">
                <button type="button" class="btn btn-cadastrar">Cadastrar</button>
            </div>
        </div>
    </section>
</main>
@endsection
