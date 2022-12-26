@extends('app.templates.basic')

@section('title', 'Detalhes do Produto')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Detalhes do Produto ID: {{ $product_detail->id }}</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <h3>{{ $product_detail->product->name }}</h3>
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                {{ $msg ?? '' }}
                @component('app.product-details._components.form_create_edit', [
                    'product_detail' => $product_detail,
                    'measured_units' => $measured_units,
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection