@extends('app.templates.basic')

@section('title', 'Produtoes')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Produto > Adicionar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('products.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
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