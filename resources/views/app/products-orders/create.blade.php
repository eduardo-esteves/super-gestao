@extends('app.templates.basic')

@section('title', 'Pedido Produto')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Adicionar Produtos aos Pedidos > Adicionar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('orders.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <h4>Detalhes do pedido</h4>
            <p>ID do pedido: {{ $order->id }}</p>
            <p>Cliente: {{ $order->customer_id }}</p>

            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app._components.form_product_order', [
                    'order'     => $order,
                    'products'  => $products
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
