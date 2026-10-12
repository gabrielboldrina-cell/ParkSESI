@extends('layouts.principal')
@section('title', 'Painel Geral Administrativo')

@section('content')

    {{-- 1. TÍTULO --}}
    <div class="mt-4 mb-4">
        <h2 class="fw-bold mb-0">Painel Geral Administrativo</h2>
        <small>Análise de dados, fluxo de veículos e relatórios de portaria</small>
    </div>

    {{-- 2. MOVIMENTAÇÃO POR COLABORADOR --}}
    <div class="card shadow-sm rounded-4 mb-4">
        <div class="card-body p-4">
            <h5 class="fw-bold mb-3">Movimentação por colaborador</h5>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-12 col-md-5">
                    <input type="search" class="form-control rounded-3"
                           placeholder="Pesquisar colaborador ou placa..." aria-label="Pesquisar">
                </div>

                {{-- Filtros por categoria (ainda não filtram nada) --}}
                <div class="col-12 col-md-7 d-flex flex-wrap justify-content-md-end gap-2">
                    <button type="button" class="btn btn-danger btn-sm rounded-pill px-3">Todos</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Docentes</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Administrativo</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Terceirizados</button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped align-middle mb-0">
                    <thead>
                        <tr>
                            <th scope="col" class="small text-uppercase">Colaborador</th>
                            <th scope="col" class="small text-uppercase">Cargo</th>
                            <th scope="col" class="small text-uppercase text-center">Entradas</th>
                            <th scope="col" class="small text-uppercase text-center">Saídas</th>
                            <th scope="col" class="small text-uppercase text-end">Tempo médio de almoço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-success-subtle text-success small fw-semibold me-2"
                                      style="width: 32px; height: 32px;">VT</span>
                                <span class="fw-semibold">Vinicius Tardelli</span>
                            </td>
                            <td>Professor Senai D.S</td>
                            <td class="text-center fw-semibold">22</td>
                            <td class="text-center fw-semibold">22</td>
                            <td class="text-end"><span class="badge bg-light text-dark border">1h 00min</span></td>
                        </tr>

                        <tr>
                            <td>
                                <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-secondary-subtle text-secondary small fw-semibold me-2"
                                      style="width: 32px; height: 32px;">D</span>
                                <span class="fw-semibold">Daniel</span>
                            </td>
                            <td>Professor Senai D.S</td>
                            <td class="text-center fw-semibold">20</td>
                            <td class="text-center fw-semibold">20</td>
                            <td class="text-end"><span class="badge bg-light text-dark border">1h 15min</span></td>
                        </tr>

                        <tr>
                            <td>
                                <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-success-subtle text-success small fw-semibold me-2"
                                      style="width: 32px; height: 32px;">F</span>
                                <span class="fw-semibold">Fabiana</span>
                            </td>
                            <td>Coordenação</td>
                            <td class="text-center fw-semibold">18</td>
                            <td class="text-center fw-semibold">18</td>
                            <td class="text-end"><span class="badge bg-light text-dark border">55min</span></td>
                        </tr>

                        <tr>
                            <td>
                                <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-secondary-subtle text-secondary small fw-semibold me-2"
                                      style="width: 32px; height: 32px;">C</span>
                                <span class="fw-semibold">Carol</span>
                            </td>
                            <td>Diretoria</td>
                            <td class="text-center fw-semibold">21</td>
                            <td class="text-center fw-semibold">21</td>
                            <td class="text-end"><span class="badge bg-light text-dark border">1h 05min</span></td>
                        </tr>

                        <tr>
                            <td>
                                <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary-subtle text-primary small fw-semibold me-2"
                                      style="width: 32px; height: 32px;">F</span>
                                <span class="fw-semibold">Fernando</span>
                            </td>
                            <td>Estudante</td>
                            <td class="text-center fw-semibold">19</td>
                            <td class="text-center fw-semibold">19</td>
                            <td class="text-end"><span class="badge bg-light text-dark border">1h 10min</span></td>
                        </tr>

                        <tr>
                            <td>
                                <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary-subtle text-primary small fw-semibold me-2"
                                      style="width: 32px; height: 32px;">L</span>
                                <span class="fw-semibold">Lincoln</span>
                            </td>
                            <td>Estudante</td>
                            <td class="text-center fw-semibold">19</td>
                            <td class="text-center fw-semibold">19</td>
                            <td class="text-end"><span class="badge bg-light text-dark border">1h 00min</span></td>
                        </tr>

                        <tr>
                            <td>
                                <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary-subtle text-primary small fw-semibold me-2"
                                      style="width: 32px; height: 32px;">AC</span>
                                <span class="fw-semibold">Ana Clara</span>
                            </td>
                            <td>Estudante</td>
                            <td class="text-center fw-semibold">25</td>
                            <td class="text-center fw-semibold">25</td>
                            <td class="text-end"><span class="badge bg-light text-dark border">1h 20min</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- 3. AÇÕES DO ADMIN: colaborador e usuário --}}
    <div class="row g-4 mb-5">

        {{-- Colaboradores --}}
        <div class="col-12 col-md-6">
            <div class="card shadow-sm rounded-4 h-100">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Colaboradores</h6>
                    <div class="d-flex flex-wrap gap-2">
                        {{-- Adicionar leva para a tela de cadastro: por isso é um link (<a>) --}}
                        <a href="#" class="btn btn-success fw-semibold">Adicionar colaborador</a>
                        <button type="button" class="btn btn-primary fw-semibold">Atualizar dados</button>
                        <button type="button" class="btn btn-danger fw-semibold">Excluir</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Usuários (porteiro e admin) --}}
        <div class="col-12 col-md-6">
            <div class="card shadow-sm rounded-4 h-100">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Usuários do sistema</h6>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#" class="btn btn-success fw-semibold">Adicionar usuário</a>
                        <button type="button" class="btn btn-primary fw-semibold">Atualizar dados</button>
                        <button type="button" class="btn btn-danger fw-semibold">Excluir</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection