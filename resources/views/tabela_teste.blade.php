@extends('layouts.principal')
@section('title', 'Tabela Testes')
@vite('resources/js/cadastroUsuario.js')

@section('content')


    <h2 class='text-center'> tabela </h2>

    <table class="table table-striped" data-bs-theme="dark">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Tipo</th>   
                <th scope="col">Imagem</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $d )
            <tr>
                <td>{{$d['nome']}}</td>
                <td>{{$d['email']}}</td>
                <td>{{$d['tipo']}}</td>
              <td>  @if(isset($d['imagem']))
                <img src="{{ Storage::url($d ['imagem']) }}"
                alt="imagem" sytle="max-width: 50px; max-height: 50px;">  
                @endif
              </td>

            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
