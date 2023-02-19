@extends('app.templates.basic')

@section('title', 'Fornecedores')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h2 class="main-title">Fornecedor - Listar</h2>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.providers.add') }}">Novo</a></li>
                <li><a href="{{ route('app.providers') }}">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 70%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>UF</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $providers as $provider)
                            <tr>
                                <td>{{ $provider->name }}</td>
                                <td>{{ $provider->email }}</td>
                                <td>{{ $provider->uf }}</td>
                                <td><a href="{{ route('app.providers.delete', $provider->id) }}">Excluir</a></td>
                                <td><a href="{{ route('app.providers.edit', $provider->id) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @php
                 unset($request['_token']);
                @endphp
                {{ $providers->appends($request)->links() }}
            </div>
        </div>
    </div>
@endsection
