@extends('layouts.login')
@section('title', 'Cadastro de Colaborador')


@section('content')

    <div class="row justify-content-center d-flex" style="margin-top: 150px;">
        <div class= "col-9 rounded shadow-lg p-3 mb-5 mt-4 bg-body-tertiary">
            <h2 class='text-center mt-4 text-dark'>Cadastro de Colaborador</h2>
            <div class="row justify-content-center d-flex">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label for="nome" class="form-label text-dark">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome do colaborador ">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label for="Nif" class="form-label text-dark">Nif</label>
                    <input type="text" class="form-control" id="Nif" name="Nif" placeholder="Digite o Nif do colaborador">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label for="Email" class="form-label text-dark">Email</label>
                    <input type="text" class="form-control"  id="Email" name="Email" placeholder="Digite o Email do colaborador">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label for="telefone" class="form-label text-dark">telefone</label>
                    <input type="Text" class="form-control" maxlength="15" id="Telefone" name="Telefone" placeholder="Digite o telefone do colaborador">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label for="Departamento" class="form-label text-dark">Departamento</label>
                    <input type="text" class="form-control" id="Departamento" name="Departamento" placeholder="Digite o departamento do colaborador">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label for="Confirmar Senha" class="form-label text-dark">Situação</label>
                    <input type="text" class="form-control"  id="Confirmar Senha" name="Confirmar Senha" placeholder="Digite a situação do colaborador">
                </div>
                <div class="col-4 mt-2 justify-content-center d-flex">
                    <button type="button" class="btn btn-primary margin-auto">Cadastrar Colaborador</button>
                </div>
            </div>
        </div>
    </div>

@endsection 
