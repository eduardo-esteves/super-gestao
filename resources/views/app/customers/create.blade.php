@extends('app.templates.basic')

@section('title', 'Clientes')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Clientes > Adicionar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('customers.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                {{ $msg ?? '' }}
                @component('app._components.form_customer', [
                    'customer'         => $customer,
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
