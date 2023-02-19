@extends('app.templates.basic')

@section('title', 'Produtoes')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h2 class="main-title">Produto > Adicionar</h2>
        </div>
        @include('app._includes.menu-buttons', [
            'back'       => 'products.index',
        ])
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                {{ $msg ?? '' }}
                @component('app._components.form_product', [
                    'measured_units'    => $measured_units,
                    'providers'         => $providers,
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
