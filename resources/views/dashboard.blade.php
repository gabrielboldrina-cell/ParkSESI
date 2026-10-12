@extends('layouts.principal')
@section('title', 'Dashboard')


@section('content')

  
    <h2 class="fw-bold mt-4 mb-4">Dashboard Administrativo</h2>


    <div class="card shadow-sm rounded-4 mb-4">
        <div class="card-body p-4">
            <h5 class="fw-bold mb-3">Movimentação por colaborador</h5>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-12 col-md-5">
                    <input type="search" class="form-control rounded-3"
                           placeholder="Pesquisar colaborador ou placa..." aria-label="Pesquisar">
                </div>


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
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow-sm rounded-4 mb-4">
        <div class="card-body p-4">
            <div class="row g-3 align-items-start mb-3">
                <div class="col-12 col-md-5">
                    <h5 class="fw-bold mb-0">Movimentação por horário</h5>
                    <small class="text-secondary">Entradas e saídas registradas ao longo do dia</small>
                </div>

                <div class="col-12 col-md-7 d-flex flex-wrap justify-content-md-end gap-2">
                    <button type="button" class="btn btn-danger btn-sm rounded-pill px-3">Hoje</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Últimos 7 dias</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Últimos 30 dias</button>
                    <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Personalizado</button>
                </div>
            </div>

            <div style="height: 320px;">
                <canvas id="graficoHorario"></canvas>
            </div>
        </div>
    </div>
    <div class="d-flex flex-wrap justify-content-end gap-2 mb-5">
        <button type="button" class="btn btn-success fw-semibold">Exportar relatório EXCEL</button>
        <button type="button" class="btn btn-danger fw-semibold">Exportar relatório PDF</button>
    </div>

    {{-- Gráfico: biblioteca Chart.js (carregada por CDN, igual ao Bootstrap) --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.7/dist/chart.umd.min.js"></script>
     <script src="{{ asset('dashboard.js') }}"></script>
   

@endsection
