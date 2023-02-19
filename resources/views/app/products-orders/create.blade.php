@extends('app.templates.basic')

@section('title', 'Pedido Produto')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h2 class="main-title">Adicionar Produtos aos Pedidos > Adicionar</h2>
        </div>
        @include('app._includes.menu-buttons', [
            'back' => 'products.index'
        ])
        <div class="informacao-pagina">
            <h4>Detalhes do pedido</h4>
            <p>ID do pedido: {{ $order->id }}</p>
            <p>Cliente: {{ $order->customer_id }}</p>

            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <h3>Itens do pedido</h3>
                <table class="app">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do produto</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($order->products as $product)
                        <tr>
                            <td>
                                {{ $product->id }}
                            </td>
                            <td>
                                {{ $product->name }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @component('app._components.form_product_order', [
                    'order'     => $order,
                    'products'  => $products
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
