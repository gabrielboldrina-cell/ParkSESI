@extends('layouts.login')
@section('title', 'Cadastro de Usuario')


@section('content')

    <div class="row justify-content-center d-flex" style="margin-top: 150px;">
        <div class= "col-9 rounded shadow-lg p-3 mb-5 mt-4 bg-body-tertiary">
            <h2 class='text-center mt-4'>Cadastro de Usuario</h2>
            <div class="row justify-content-center d-flex">
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control form-control-sm" id="nome" name="nome" placeholder="Digite seu nome">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label for="Email" class="form-label ">Email</label>
                    <input type="text" class="form-control form-control-sm" id="Email" name="Email" placeholder="Digite seu email">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                     <label for="tipo" class="form-label">Tipo</label>
                    <select id="tipo" class="form-select form-select-sm">
                        <option selected value="1">Administrador</option>
                        <option value="2">Porteiro</option>
                    </select>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label for="CPF" class="form-label">CPF</label>
                    <input type="text" class="form-control form-control-sm" maxlength="11" id="CFP" name="CFP"
                        placeholder="Digite seu CFP">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label for="Senha" class="form-label">Senha</label>
                    <input type="password" class="form-control form-control-sm" id="Senha" name="Senha"
                        placeholder="Digite sua senha">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                    <label for="Confirmar Senha" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control form-control-sm " id="Confirmar Senha" name="Confirmar Senha"
                        placeholder="Digite sua senha novamente">
                </div>
                <div class="col-4 mt-2 justify-content-center d-flex">
                    <button type="button" class="btn btn-primary margin-auto">Cadastrar Usuario</button>
                </div>
            </div>
        </div>
    </div>

@endsection