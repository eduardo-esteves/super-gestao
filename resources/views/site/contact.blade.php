@extends('site.templates.basic')

@section('title', 'Contato')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                <div class="wrapper-form-contact">
                    @component('site._components.contact_form', [
                        'class' => 'borda-preta',
                        'reason_contact' => $reason_contact
                    ])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('/img/facebook.png') }}">
            <img src="{{ asset('/img/linkedin.png') }}">
            <img src="{{ asset('/img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
