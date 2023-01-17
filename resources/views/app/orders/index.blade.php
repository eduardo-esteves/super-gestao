@extends('app.templates.basic')

@section('title', 'Pedidos')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Pedidos - Listar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('orders.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 70%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Cliente</th>
                        <th colspan="3">Açoes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->customer_id }}</td>
                            <td>
                                <a href="{{ route('orders.show', [
                                'order' => $order->id]) }}">
                                    Visualizar
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('orders.edit', [
                                    'order' => $order->id]) }}">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <form id="form_{{ $order->id }}" method="post" action="{{ route('orders.destroy', [
                                    'order' => $order->id
                                    ]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a
                                        href="#"
                                        onclick="document.getElementById('form_{{ $order->id }}').submit()">
                                            Excluir
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @php
                    unset($request['_token']);
                @endphp
                {{ $orders->appends($request)->links() }}
            </div>
        </div>
    </div>
@endsection
