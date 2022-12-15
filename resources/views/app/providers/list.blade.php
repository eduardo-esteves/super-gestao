@extends('app.templates.basic')

@section('title', 'Fornecedores')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor - Listar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.providers.add') }}">Novo</a></li>
                <li><a href="{{ route('app.providers') }}">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                ... Lista ...
            </div>
        </div>
    </div>
@endsection