@extends('layouts.login')
@section('title', 'Cadastro de Veículo')


@section('content')
<link rel="stylesheet" href="{{ asset('CadastroColaborador.css') }}">


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">

                <div class="bg-parksesi text-white rounded-5 shadow-lg p-4 p-md-5">
                    <h2 class="fw-bold mb-1">Cadastro de veículo</h2>
                    <p class="mb-4 opacity-75">Preencha os dados abaixo para cadastrar um novo veículo.</p>

                    <form method="POST" action="#"> 

                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <label for="placa" class="form-label fw-semibold small">Placa</label>
                                <input type="text" class="form-control form-control-lg rounded-4"
                                       id="placa" name="placa" placeholder="Ex.: ABC1D23">
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="modelo" class="form-label fw-semibold small">Modelo</label>
                                <input type="text" class="form-control form-control-lg rounded-4"
                                       id="modelo" name="modelo" placeholder="Ex.: Gol">
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="cor" class="form-label fw-semibold small">Cor</label>
                                <input type="text" class="form-control form-control-lg rounded-4"
                                       id="cor" name="cor" placeholder="Ex.: Prata">
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="tipo" class="form-label fw-semibold small">Tipo</label>
                                <select id="tipo" name="tipo" class="form-select form-select-lg rounded-4">
                                    <option value="carro" selected>Carro</option>
                                    <option value="moto">Moto</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="nif" class="form-label fw-semibold small">NIF do colaborador</label>
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

