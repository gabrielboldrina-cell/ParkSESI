@extends('layouts.principal')
@section('title', 'Cadastrar Usuario')

@section('content')
    <h3 class="text-center">Cadastro de Usuario</h3>
    <div class="row mt-3 justify-content-center d-flex">
        <div class="col-6 row">
            <div class="mb-3 col-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control form-control-sm" id="nome">
            </div>
            <div class="mb-3 col-6">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control form-control-sm" id="email">
            </div>
            <div class="mb-3 col-6">
                <label for="senha" class="form-label">Senha</label>
                <input type="text" class="form-control form-control-sm" id="senha">
            </div>
            <div class="mb-3 col-6">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control form-control-sm" id="tipo">
            </div>
            <div class="mb-3 col-6">
                <label for="tipo" class="form-label">Usuario</label>
                <select class="form-select  form-select-sm" id="usuario">
                @foreach($usuarios as $u)
                    <option value="{{ $u['id'] }}">{{ $u['nome'] }}</option>
                @endforeach
                </select>

                </div>

                <button type="button" id="cadastrar" class="btn btn-primary btn-sm mt-2">Cadastrar </button>  
        </div>
    </div>

@endsection
