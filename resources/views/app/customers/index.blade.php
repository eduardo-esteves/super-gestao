@extends('app.templates.basic')

@section('title', 'Clientes')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h2 class="main-title">Clientes - Listar</h2>
        </div>
        @include('app._includes.menu-buttons', [
            'add'       => 'customers.create',
            'search'    => 'customers.search'
        ])
        <div class="informacao-pagina">
            <div style="width: 70%; margin-left: auto; margin-right: auto;">
                <table class="app">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Profissão</th>
                        <th>Sexo</th>
                        <th>Idade</th>
                        <th colspan="3">Açoes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $customers as $key =>$customer)
                        <tr class="{{ (++$key % 2 === 0) ? 'even' : 'odd' }}">
                            <td>{{ $key }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->occupation }}</td>
                            <td>{{ $customer->gender }}</td>
                            <td>{{ $customer->age }}</td>
                            <td>
                                <a href="{{ route('customers.show', [
                                'customer' => $customer->id]) }}">
                                    Visualizar
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('customers.edit', [
                                    'customer' => $customer->id]) }}">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <form id="form_{{ $customer->id }}" method="post" action="{{ route('customers.destroy', [
                                    'customer' => $customer->id
                                    ]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a
                                        href="#"
                                        onclick="document.getElementById('form_{{ $customer->id }}').submit()">
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
                {{ $customers->appends($request)->links() }}
            </div>
        </div>
    </div>
@endsection
