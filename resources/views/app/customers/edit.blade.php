@extends('app.templates.basic')

@section('title', 'Clientes')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h2 class="main-title">Clientes > Editar</h2>
        </div>
        @include('app._includes.menu-buttons', [
            'back' => 'customers.index',
        ])
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
