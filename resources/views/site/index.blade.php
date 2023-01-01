@extends('site.templates.basic')

@section('title', 'Home')

@section('content')
    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.<p>
                <div class="wrapper-features">
                    <div class="itens-features">
                        <img class="check" src="{{ asset('/img/check.png') }}" alt="check img">
                        <span class="texto-branco">30% off adquirindo esse mês</span>
                    </div>
                    <div class="itens-features">
                        <img class="check" src="{{ asset('/img/check.png') }}" alt="check img">
                        <span class="texto-branco">Gestão completa e descomplicada</span>
                    </div>
                    <div class="itens-features">
                        <img class="check" src="{{ asset('/img/check.png') }}" alt="check img">
                        <span class="texto-branco">Sua empresa na nuvem com direito ao melhor suporte</span>
                    </div>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('/img/player_video.jpg') }}" alt="play video">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h2>Contato</h2>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                @component('site._components.contact_form', [
                    'class' => 'borda-branca',
                    'reason_contact' => $reason_contact,
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
