@extends('layouts.principal')
@section('title', 'Controle de Entrada e Saída')

@section('content')

    {{-- 2. TÍTULO --}}
    <div class="mt-4 mb-4">
        <h2 class="fw-bold mb-0">Controle de Entrada e Saída</h2>
        <small>Portaria Principal</small>
    </div>

    {{-- 3. INDICADORES (por enquanto com números fixos) --}}
    <div class="row g-3 mb-4">
        <div class="col-12 col-md-4">
            <div class="card shadow-sm rounded-4 h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <span class="d-inline-block rounded-circle bg-danger p-2"></span>
                    <div>
                        <div class="fs-2 fw-bold lh-1">35</div>
                        <small>No estacionamento</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card shadow-sm rounded-4 h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <span class="d-inline-block rounded-circle bg-success p-2"></span>
                    <div>
                        <div class="fs-2 fw-bold lh-1">10</div>
                        <small>Vagas disponíveis</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card shadow-sm rounded-4 h-100">
                <div class="card-body d-flex align-items-center gap-3">
                    <span class="d-inline-block rounded-circle bg-secondary p-2"></span>
                    <div>
                        <div class="fs-2 fw-bold lh-1">50</div>
                        <small>Colaboradores</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- 4. BUSCA --}}
    <div class="row mb-3">
        <div class="col-12 col-md-4">
            <input type="search" class="form-control rounded-3"
                   placeholder="Pesquisar colaborador ou placa..." aria-label="Pesquisar">
        </div>
    </div>
    <div class="card shadow-sm rounded-4 mb-5">
        <div class="table-responsive">
            <table class="table table-striped align-middle mb-0">
                <thead>
                    <tr>
                        <th scope="col" class="small text-uppercase">Colaborador</th>
                        <th scope="col" class="small text-uppercase">Cargo</th>
                        <th scope="col" class="small text-uppercase">Placa</th>
                        <th scope="col" class="small text-uppercase">Almoço</th>
                        <th scope="col" class="small text-uppercase text-end">Ação/Almoço</th>
                        <th scope="col" class="small text-uppercase text-end">Ação</th>
                    </tr>
                </thead>
                <tbody>

  
                    <tr>
                        <td class="fw-semibold">Vinicius Tardelli</td>
                        <td class="text-secondary">Professor Senai D.S</td>
                        <td><span class="badge bg-light text-dark border">ABC-1234</span></td>
                        <td class="text-secondary">12:00 – 13:00</td>
                        <td class="text-end">
                            <button type="button" class="btn btn-warning btn-sm">SAÍDA ALMOÇO</button>
                            <button type="button" class="btn btn-danger btn-sm">REGISTRAR SAÍDA</button>
                        </td>
                    </tr>


                    <tr>
                        <td class="fw-semibold">Daniel</td>
                        <td class="text-secondary">Professor Senai D.S</td>
                        <td><span class="badge bg-light text-dark border">DEF-5678</span></td>
                        
                        <td class="text-secondary">12:30 – 13:30</td>
                        <td class="text-end">
                            <button type="button" class="btn btn-warning btn-sm">SAÍDA ALMOÇO</button>
                            <button type="button" class="btn btn-success btn-sm">REGISTRAR ENTRADA</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="fw-semibold">Fabiana</td>
                        <td class="text-secondary">Coordenação</td>
                        <td><span class="badge bg-light text-dark border">GHI-9012</span></td>
                        <td class="text-secondary">12:00 – 13:00</td>
                        <td class="text-end">
                            <button type="button" class="btn btn-warning btn-sm">VOLTA DO ALMOÇO</button>
                             <button type="button" class="btn btn-success btn-sm">REGISTRAR ENTRADA</button>
                        </td>
                    </tr>

                    <tr>
                        <td class="fw-semibold">Carol</td>
                        <td class="text-secondary">Diretora Escola</td>
                        <td><span class="badge bg-light text-dark border">JKL-3456</span></td>
                        <td class="text-secondary">13:00 – 14:00</td>
                        <td class="text-end">
                             <button type="button" class="btn btn-warning btn-sm">VOLTA DO ALMOÇO</button>
                            <button type="button" class="btn btn-success btn-sm">REGISTRAR ENTRADA</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection