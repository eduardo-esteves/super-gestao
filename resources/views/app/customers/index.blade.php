@extends('app.templates.basic')

@section('title', 'Clientes')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Clientes - Listar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('customers.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 70%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Sexo</th>
                        <th>Profissão</th>
                        <th>Casado?</th>
                        <th colspan="3">Açoes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $customers as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->age }}</td>
                            <td>{{ $customer->gender }}</td>
                            <td>{{ $customer->occupation }}</td>
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
