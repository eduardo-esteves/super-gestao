@extends('app.templates.basic')

@section('title', 'Produtos')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h2 class="main-title">Produto - Listar</h2>
        </div>
        @include('app._includes.menu-buttons', [
            'add'       => 'products.create',
        ])
        <div class="informacao-pagina">
            <div style="width: 70%; margin-left: auto; margin-right: auto;">
                <table class="app">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Fornecedor</th>
                        <th>Peso</th>
                        <th>Unidade ID</th>
                        <th>Comprimento</th>
                        <th>Altura</th>
                        <th>Largura</th>
                        <th colspan="3">Açoes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->provider->name }}</td>
                            <td>{{ $product->pounds }}</td>
                            <td>{{ $product->measured_unit_id }}</td>
                            <td>{{ $product->productDetail->length ?? '' }}</td>
                            <td>{{ $product->productDetail->height ?? '' }}</td>
                            <td>{{ $product->productDetail->width ?? '' }}</td>
                            <td><a href="{{ route('products.show', [
                                'product' => $product->id
                            ]) }}">Visualizar</a></td>
                            <td><a href="{{ route('products.edit', ['product' => $product->id]) }}">Editar</a></td>
                            <td>
                                <form id="form_{{ $product->id }}" method="post" action="{{ route('products.destroy', [
                                    'product' => $product->id
                                    ]) }}
                                ">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" onclick="document.getElementById('form_{{ $product->id }}').submit()">Excluir</a>
                                </form>
                            </td>
                        </tr>

                            <tr>
                                <td colspan="11">
                                    @foreach($product->orders as $order)
                                        <a href="{{ route('app.products-orders.create', ['order' => $order->id]) }}">
                                            Pedido: {{ $order->id }},
                                        </a>
                                    @endforeach
                                </td>
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
