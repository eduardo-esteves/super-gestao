@extends('app.templates.basic')

@section('title', 'Produtos')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Produto - {{ $product->name }}</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('products.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 70%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Peso</th>
                        <th colspan="2">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->pounds }}</td>
                            <td><a href="">Excluir</a></td>
                            <td><a href="">Editar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection