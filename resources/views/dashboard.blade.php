@extends('layouts.principal')
@section('title', 'Dashboard')
@vite('resources/js/cadastroUsuario.js')


@section('content')     
    <h2 class='text-center'> tabela </h2>

    <table class="table table-striped" data-bs-theme="dark">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Departamento</th>   
                <th scope="col">modelo</th>
                <th scope="col">marca</th>
                <th scope="col">cor</th>
                <th scope="col">Situação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $d )
            <tr>        
                <td>{{$d['nome']}}</td>
                <td>{{$d['email']}}</td>
                <td>{{$d['departamento']}}</td>
                <td>{{$d['modelo']}}</td>
                <td>{{$d['marca']}}</td>
                <td>{{$d['cor']}}</td>
                <td>{{$d['situacao']}}</td> 
                
            </tr>
            @endforeach
        </tbody>
    </table>
   

@endsection
