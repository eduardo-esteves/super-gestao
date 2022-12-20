@extends('app.templates.basic')

@section('title', 'Produtos')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Produto - Listar</p>
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
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Peso</th>
                        <th>Unidade ID</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->pounds }}</td>
                            <td>{{ $product->measured_unit_id }}</td>
                            <td><a href="">Excluir</a></td>
                            <td><a href="">Editar</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @php
                    unset($request['_token']);
                @endphp
                {{ $products->appends($request)->links() }}
            </div>
        </div>
    </div>
@endsection