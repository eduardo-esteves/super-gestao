@extends('app.templates.basic')

@section('title', 'Pedidos')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h2 class="main-title">Pedidos > Adicionar</h2>
        </div>
        @include('app._includes.menu-buttons', [
            'back' => 'orders.index',
        ])
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                {{ $msg ?? '' }}
                @component('app._components.form_order', [
                    'order'         => $order,
                    'customers'     => $customers
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
