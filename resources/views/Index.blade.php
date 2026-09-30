@extends('layout.principal')
@section('title', 'Tela Inicial')


@section('content')
    <div class="">
        <div class="">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>


        <table class=" table table-striped justify-content-center rounded shadow-lg" style="margin-top: 150px;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Colaborador</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Modelo do carro </th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Vinicius Tardelli</td>
                    <td>Professor Senai D.S</td>
                    <td>ABC-123</td>
                    <td>Porsche 911</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Daniel</td>
                    <td>Professor Senai D.S</td>
                    <td>DEF-3421</td>
                    <td>Civic 2011</td>
                    <td> </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Carol</td>
                    <td>Diretora</td>
                    <td>OUI-5678</td>
                    <td>Corolla 2015</td>
                    <td> </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Lilian Boldrina</td>
                    <td>Supervisora S.U</td>
                    <td>AXL-2503</td>
                    <td>bmw-320i</td>
                    <td> </td>
                </tr>
            </tbody>
        </table>

    </div>


@endsection
