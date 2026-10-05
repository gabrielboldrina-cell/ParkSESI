@extends('layouts.principal')
@section('title', 'Dashboard')


@section('content')

    <div class="table-responsive rounded-3 border">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th scope="col">Colaborador</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Ação</th>

                </tr>
            </thead>
            {{-- <tbody>
                @foreach ($Dashboard as $p)
                    <tr>
                        <th scope="row">{{ $p->Colaborador }}</th>
                        <td>{{ $p->Cargo }}</td>
                        <td>{{ $p->Placa }}</td>
                        <td>{{ $p->Modelo }}</td>
                        <td>{{ $p->Ação }}</td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            </tbody> --}}
        </table>
    </div>




@endsection
