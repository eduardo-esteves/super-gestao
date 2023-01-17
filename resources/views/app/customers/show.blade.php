@extends('app.templates.basic')

@section('title', 'Clientes')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Cliente - {{ $customer->name }}</p>
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
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Profissão</th>
                        <th>Sexo</th>
                        <th>Idade</th>
                        <th>Casado?</th>
                        <th colspan="2">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->occupation }}</td>
                            <td>{{ $customer->gender }}</td>
                            <td>{{ $customer->age }}</td>
                            <td>{{ $customer->married === true ? 'sim' : 'não'}}</td>
                            <td><a href="{{ route('customers.edit', ['customer' => $customer->id]) }}">Editar</a></td>
                            <td>
                                <form id="form_{{ $customer->id }}" method="post" action="{{ route('customers.destroy', [
                                    'customer' => $customer->id ]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" onclick="document.getElementById('form_{{ $customer->id }}').submit()">Excluir</a>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
