@extends('app.templates.basic')

@section('title', 'Pedidos')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Pedidos > Adicionar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('orders.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
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
