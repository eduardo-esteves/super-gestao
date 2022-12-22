@extends('app.templates.basic')

@section('title', 'Produtoes')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Produto > Detalhes do Produto</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                {{ $msg ?? '' }}
                @component('app.product-details._components.form_create_edit', [
                    'measured_units' => $measured_units,
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection